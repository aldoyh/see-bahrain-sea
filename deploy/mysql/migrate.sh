#!/bin/bash
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

LOCAL_URL="http://localhost:8881/"
LOCAL_PATH="/Users/aldoyh/Studio/my-wordpress-website"

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
