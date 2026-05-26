import fs from "node:fs";
import path from "node:path";
import { execSync } from "node:child_process";

// ANSI Colors for premium output
const RESET = "\x1b[0m";
const BOLD = "\x1b[1m";
const CYAN = "\x1b[36m";
const GREEN = "\x1b[32m";
const YELLOW = "\x1b[33m";
const RED = "\x1b[31m";
const MAGENTA = "\x1b[35m";

function printBanner() {
  console.log(`\n${BOLD}${CYAN}====================================================${RESET}`);
  console.log(`  ${BOLD}${MAGENTA}WordPress Studio Enterprise Deployment Assistant${RESET}`);
  console.log(`${BOLD}${CYAN}====================================================${RESET}`);
}

function getSiteInfo() {
  console.log(`${YELLOW}Detecting local site settings via Studio CLI...${RESET}`);
  let output = "";
  try {
    output = execSync("studio site status", { encoding: "utf8" });
  } catch (error) {
    console.log(`${RED}Warning: Could not run "studio site status". Using default local parameters.${RESET}`);
  }

  // Fallback defaults
  let siteUrl = "http://localhost:8881/";
  let sitePath = process.cwd();
  let wpVersion = "7.0";

  // Parse Site URL
  const urlMatch = output.match(/Site URL\s*│\s*(http[s]?:\/\/[^\s│]+)/);
  if (urlMatch) {
    siteUrl = urlMatch[1].trim();
  }

  // Parse WP version
  const wpMatch = output.match(/WP version\s*│\s*([^\s│]+)/);
  if (wpMatch) {
    wpVersion = wpMatch[1].trim();
  }

  return { siteUrl, sitePath, wpVersion };
}

function ensureDir(dirPath) {
  if (!fs.existsSync(dirPath)) {
    fs.mkdirSync(dirPath, { recursive: true });
  }
}

function scaffoldDeployment() {
  printBanner();
  
  const info = getSiteInfo();
  console.log(`\n${BOLD}Detected Local Settings:${RESET}`);
  console.log(` - ${BOLD}Local URL:${RESET} ${GREEN}${info.siteUrl}${RESET}`);
  console.log(` - ${BOLD}Local Directory Path:${RESET} ${GREEN}${info.sitePath}${RESET}`);
  console.log(` - ${BOLD}WordPress Core Version:${RESET} ${GREEN}${info.wpVersion}${RESET}`);

  const deployRoot = path.join(process.cwd(), "deploy");
  const mysqlDir = path.join(deployRoot, "mysql");
  const sqliteDir = path.join(deployRoot, "sqlite");

  ensureDir(deployRoot);
  ensureDir(mysqlDir);
  ensureDir(sqliteDir);

  // ==========================================
  // SCAFFOLD OPTION #2: MySQL / MariaDB Migration
  // ==========================================

  // MySQL Readme
  const mysqlReadme = `====================================================
WordPress MySQL Production Migration Guide
====================================================

You are migrating from a local SQLite setup to a standard MySQL/MariaDB database in production. Since the database engines differ, you cannot simply copy the SQLite database file (.ht.sqlite).

FOLLOW THESE PRODUCTION STANDARDS:

1. Recommended Route: Automated Migration Plugin (Safest)
   --------------------------------------------------------
   Use All-in-One WP Migration, Duplicator, or WP Migrate DB.
   - Install All-in-One WP Migration locally.
   - Export your site to a "File" download. The plugin reads the SQLite tables and compiles them into a database-agnostic package.
   - Install WordPress on your production MySQL host.
   - Install the same plugin in production, upload the package, and import.
   - The plugin automatically handles the SQLite-to-MySQL translation and performs a serialized-safe URL and path search-and-replace.

2. Alternative Route: Manual SQL Export and Conversion
   ----------------------------------------------------
   If you want to manually migrate the database:
   - Export SQLite to SQL format.
   - Convert SQLite SQL dialect to MySQL SQL dialect (e.g. replacing 'AUTOINCREMENT' with 'AUTO_INCREMENT', adjusting quotes, removing SQLite-specific pragmas).
   - Import the converted SQL file into your production MySQL database.
   - Run the serialized search-and-replace script provided in this folder (migrate.sh) to update options and paths.

3. Post-Import: Clean Up SQLite Drop-Ins
   --------------------------------------
   Once imported to MySQL:
   - Delete wp-content/db.php (the SQLite drop-in).
   - Delete wp-content/mu-plugins/sqlite-database-integration/ directory.
   - Add standard MySQL database connection constants back to wp-config.php:
     define('DB_NAME', 'production_db_name');
     define('DB_USER', 'production_db_user');
     define('DB_PASSWORD', 'production_db_password');
     define('DB_HOST', 'localhost');
`;
  fs.writeFileSync(path.join(mysqlDir, "readme-mysql.txt"), mysqlReadme);

  // MySQL Migrate script template
  const mysqlMigrateSh = `#!/bin/bash
# =========================================================================
# MySQL Production Path & URL Search-and-Replace Automation Script
# =========================================================================

# INSTRUCTIONS:
# 1. Upload this script to your production server root.
# 2. Set database connection parameters in your active production wp-config.php.
# 3. Make this script executable: chmod +x migrate.sh
# 4. Run the script: ./migrate.sh https://myproductiondomain.com /var/www/production-folder

PROD_URL=$1
PROD_PATH=$2

if [ -z "$PROD_URL" ] || [ -z "$PROD_PATH" ]; then
    echo "Usage: ./migrate.sh <production_url> <production_absolute_path>"
    echo "Example: ./migrate.sh https://mywebsite.com /var/www/mywebsite"
    exit 1
fi

LOCAL_URL="${info.siteUrl}"
LOCAL_PATH="${info.sitePath}"

echo "Starting Production Database URL & Path Search-and-Replace..."
echo "----------------------------------------------------------------"
echo "Replacing Local URL:  $LOCAL_URL  ==>  $PROD_URL"
echo "Replacing Local Path: $LOCAL_PATH ==>  $PROD_PATH"
echo "----------------------------------------------------------------"

# Run WP-CLI search-replace
wp search-replace "$LOCAL_URL" "$PROD_URL" --all-tables
wp search-replace "$LOCAL_PATH" "$PROD_PATH" --all-tables

# Flush caches
wp cache flush
wp transient delete --all

echo "✔ MySQL Search-and-Replace Completed successfully!"
`;
  fs.writeFileSync(path.join(mysqlDir, "migrate.sh"), mysqlMigrateSh);


  // ==========================================
  // SCAFFOLD OPTION #3: SQLite Production Deployment
  // ==========================================

  // SQLite Readme
  const sqliteReadme = `====================================================
WordPress SQLite Production Shipment & Security Guide
====================================================

You are deploying WordPress using SQLite directly in your production environment. While SQLite simplifies deployment, you MUST take strict steps to secure your database and adjust site options.

FOLLOW THESE PRODUCTION STANDARDS:

1. Critical Security: Prevent Database File Download
   -------------------------------------------------
   By default, your database is located at wp-content/database/.ht.sqlite.
   If left unprotected, anyone can navigate to http://example.com/wp-content/database/.ht.sqlite and download your database, exposing hashes, emails, and custom settings.
   
   - APACE / LITESPEED HOSTS:
     Make sure the file wp-content/database/.htaccess is uploaded. It contains "DENY FROM ALL", which blocks web visitors on Apache servers.
     
   - NGINX HOSTS:
     You MUST add the nginx block provided in 'nginx.conf' to your server block config, otherwise the .htaccess rule is ignored and your database is exposed!

2. Environment Migration: Path & URL Synchronization
   -------------------------------------------------
   You can copy the local '.ht.sqlite' file directly, but you must run search-and-replace to correct absolute URLs and folder directories.
   Use the 'ship-sqlite.sh' script in this folder to automate this post-copy step in production.
`;
  fs.writeFileSync(path.join(sqliteDir, "readme-sqlite.txt"), sqliteReadme);

  // Nginx configuration block
  const nginxConf = `# =========================================================================
# SQLite Database Security Rule (Nginx)
# =========================================================================
# Copy this block directly into your active Nginx server configuration block.
# Typically located in /etc/nginx/sites-available/your-site.conf
# Remember to reload Nginx after applying: sudo nginx -s reload

server {
    # ... your existing configuration rules ...

    # CRITICAL: Prevent web visitors from downloading the SQLite database
    location ~* \.sqlite$ {
        deny all;
        access_log off;
        log_not_found off;
        return 404;
    }

    location ~* /wp-content/database/ {
        deny all;
        access_log off;
        log_not_found off;
        return 404;
    }

    # ... remaining configuration rules ...
}
`;
  fs.writeFileSync(path.join(sqliteDir, "nginx.conf"), nginxConf);

  // Apache config matching
  const apacheConf = `# =========================================================================
# SQLite Database Security Rule (Apache / LiteSpeed)
# =========================================================================
# This rule is already configured in your wp-content/database/.htaccess file,
# but can be added to your root .htaccess file for absolute double-layered security.

<FilesMatch "\.(sqlite|db)$">
    <IfModule mod_authz_core.c>
        Require all denied
    </IfModule>
    <IfModule !mod_authz_core.c>
        Order allow,deny
        Deny from all
    </IfModule>
</FilesMatch>
`;
  fs.writeFileSync(path.join(sqliteDir, "apache.conf"), apacheConf);

  // SQLite shipment shell script
  const sqliteShipSh = `#!/bin/bash
# =========================================================================
# SQLite Production Environment Migration and Sync Script
# =========================================================================

# INSTRUCTIONS:
# 1. Upload your code files AND wp-content/database/.ht.sqlite database file.
# 2. Upload this script to your production server root directory.
# 3. Make this script executable: chmod +x ship-sqlite.sh
# 4. Run the script: ./ship-sqlite.sh https://myproductiondomain.com /var/www/production-folder

PROD_URL=$1
PROD_PATH=$2

if [ -z "$PROD_URL" ] || [ -z "$PROD_PATH" ]; then
    echo "Usage: ./ship-sqlite.sh <production_url> <production_absolute_path>"
    echo "Example: ./ship-sqlite.sh https://mywebsite.com /var/www/mywebsite"
    exit 1
fi

LOCAL_URL="${info.siteUrl}"
LOCAL_PATH="${info.sitePath}"

echo "Synchronizing SQLite Production Environment Database Options..."
echo "----------------------------------------------------------------"
echo "URL Replacement:  $LOCAL_URL  ==>  $PROD_URL"
echo "Path Replacement: $LOCAL_PATH ==>  $PROD_PATH"
echo "----------------------------------------------------------------"

# Run WP-CLI search-replace directly on the SQLite database
wp search-replace "$LOCAL_URL" "$PROD_URL" --all-tables
wp search-replace "$LOCAL_PATH" "$PROD_PATH" --all-tables

# Flush caches
wp cache flush
wp transient delete --all

echo "----------------------------------------------------------------"
echo "✔ SQLite Database Options & Paths successfully converted!"
echo "⚠️  REMEMBER: Ensure your Nginx/Apache configuration prevents access to the .sqlite database file."
`;
  fs.writeFileSync(path.join(sqliteDir, "ship-sqlite.sh"), sqliteShipSh);

  console.log(`\n${GREEN}✔ Enterprise Deployment Helper Scaffolding Complete!${RESET}`);
  console.log(`Generated customizable assets under: ${BOLD}deploy/${RESET}`);
  console.log(` - ${BOLD}deploy/mysql/${RESET} (For Option #2 - Standard MySQL/MariaDB hosts)`);
  console.log(` - ${BOLD}deploy/sqlite/${RESET} (For Option #3 - Lightweight SQLite deployments)`);
  console.log(`\nAll files have been pre-filled with your active local parameters:`);
  console.log(` - Site URL (${info.siteUrl})`);
  console.log(` - Folder path (${info.sitePath})`);
}

scaffoldDeployment();
