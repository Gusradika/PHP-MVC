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


// => Routing

- .htaccess adalah controller yang dibuat untuk menyetting konfigurasi dari MVC. sebagai contoh kita dapat memberikan {Options -Indexes} yang berarti user tidak akan bisa masuk jika didalam suatu folder MVC tidak ditemukan Index. Teknik ini disebut Routing.

.htaccess Commands :
Options -Multiviews
Options -Indexes    // Khusus folder app
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [L]

Output = Memberikan parameter setiap folder serta memecah url, dan security untuk user tidak mengakses folder app

// => controller

bedah :
localhost/phpmvc/public/about/page
about = Controller yang memiliki class about 
page = Controller yang memiliki method page

fungsi2 ini didalam APP yang di inisiasi oleh construct akan membedah dan mengecek apakah ada file yang bernama VARIABLE.php di dalam folder controllers? jika tidak ada maka akan di kembalikan. jika ada maka akan di salurkan.
dan kita dapat memberikan Paramater didalam default Index.php setiap folder. yang nantinya akan di gunakan sebagai pengambilan data/variable yang memiliki value.

contoh :
public/About/page/10/20
Aboout/page = [STATUSNYA ADA]
10/20 = [STATUSNYA TIDAK ADA/ TIDAK DI CEK]
maka 10 dan 20 akan menjadi parameter didalam index

Controller juga dapat mengirimkan data Variable yang akan disetor melalui paramter index. dan akan di integrasikan ke folder Views. jadi secara umum Controllers hanya memuat data dan apa yang akan di tampilkan pada Views.