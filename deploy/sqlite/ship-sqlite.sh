#!/bin/bash
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

LOCAL_URL="http://localhost:8881/"
LOCAL_PATH="/Users/aldoyh/Studio/my-wordpress-website"

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
