====================================================
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
