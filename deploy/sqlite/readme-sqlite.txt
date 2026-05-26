====================================================
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
