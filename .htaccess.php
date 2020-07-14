Options +FollowSymLinks
RewriteEngine On

RewriteCond %{SERVER_PORT} 80
RewriteCond %{REQUEST_URI} !^/[0-9]+\..+\.cpaneldcv$
RewriteCond %{REQUEST_URI} !^/\.well-known/pki-validation/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
RewriteRule ^(.*)$ https://www.llibkatec.co.ke/$1 [R,L] 

# Add the redirects for urls
RewriteRule ^/?$ index.html [NC,L]
RewriteRule ^about/?$ about.html [NC,L]
RewriteRule ^contact/?$ contact.html [NC,L]
RewriteRule ^messaging/?$ messaging.php [NC,L]
RewriteRule ^products/?$ products.html [NC,L]
RewriteRule ^services/?$ services.html [NC,L]