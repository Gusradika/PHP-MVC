app 
-> core (pusat)
-> models (Databases)
-> views -> home

public
-> css (file css)
-> img (file img)
-> js (file js)
index.php

Catatan :
-File index didalam public akan mengambil seluruh Folder core

-Parsing URL akan merapikan URL sehingga tidak akan melihatkan file mana yang dibuka.

- .htaccess adalah controller yang dibuat untuk menyetting konfigurasi dari MVC. sebagai contoh kita dapat memberikan {Options -Indexes} yang berarti user tidak akan bisa masuk jika didalam suatu folder MVC tidak ditemukan Index. Teknik ini disebut Routing.

.htaccess Commands :
Options -Multiviews
Options -Indexes    // Khusus folder app
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [L]

