<?php
session_start();
if($_SESSION["yKul"] != true) { 
	header("Location: giris.php"); 
	exit;
	}
	
	
	echo "<h2>Anasayfa</h2><br><br><a href=\"cikis.php\">Oturumu Kapat</a>";
?>