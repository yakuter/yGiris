<?php

//Bu uygulamayi hazirlayan ve sunan Erhan Yakut (yakuter)
// http://www.yakuter.com
// yakuter@gmail.com

//ezSQL çekirdegini dahil ediyoruz.
include_once "ez_sql_core.php";

// ezSQL veritabani bilesenini cagiriyoruz.
include_once "ez_sql_mysql.php";

// veritabanin ayarlarini yapiyoruz.
$vt_kullanici="";
$vt_parola="";
$vt_isim="";
$vt_sunucu="localhost";

// ezSQL sinifini cagirarak calistirmaya basliyoruz.
$db = new ezSQL_mysql($vt_kullanici,$vt_parola,$vt_isim,$vt_sunucu);

?>