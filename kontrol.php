<?php
session_start();

include('ayar.php');

function duzenPost($giris){	
	$giris = htmlspecialchars($giris);
	$giris = (get_magic_quotes_gpc()?$giris:addslashes($giris));
	return $giris;
}

@ $veri_kullanici	= duzenPost($_POST['ykullanici']);
@ $veri_parola      = duzenPost($_POST['yparola']);
@ $ip            	= duzenPost($_POST['ip']);
$basari_durumu=TRUE;

$sorgu="SELECT count(yuyeID) FROM y_uye WHERE ykullanici='$veri_kullanici'";
if($db->get_var($sorgu) > 0){

	$sorgu2="SELECT * FROM y_uye WHERE ykullanici='$veri_kullanici' AND yparola='".md5($veri_parola)."'";
	if ($sonuc2 = $db->get_row($sorgu2)) {
		$basari_durumu=TRUE;
	}	
	else
	{	$basari_durumu=FALSE;	}
}	
else
{	$basari_durumu=FALSE;	}


// Sonuç
if ($basari_durumu) 
{
	$_SESSION["yKul"] = $veri_kullanici;
	echo "ok";
}
else 
{
	echo "Hatalı giriş yaptınız!";
}
?>