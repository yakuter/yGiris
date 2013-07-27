<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>yGiriş</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="tr" />

<!-- JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/yakuter.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="sifirla.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body>

<div id="govde">
	<div id="kutu">

		<div class="baslik">yGiriş | Yakuter Giriş Betiği</div>

		<div class="durum">
			<?php
			if (isset($_GET['cikis']) AND ($_GET['cikis']=="basarili")) {
				echo '<div class="tamam">Başarılı bir şekilde Çıkış yaptınız!</div>';
			}			
			else 
			{
				echo '<div class="ikaz">"Kullanıcı Adı" ve "Parola\'yı" <b>yakuter.com</b> olarak giriniz.</div>';
			}?>
		</div>
		
		<form name="ygiris_formu" method="post" action="javascript:void(0);" >
		<?php $ipi = getenv("REMOTE_ADDR");?>
		<input type="hidden" name="ip" id="ip" value="<?php echo $ipi ?>" />
		<table>
		<tr>
			<td class="bilgisi">Kullanıcı Adı</td>
			<td><input type="text" name="ykullanici" id="ykullanici" class="kutucuk" tabindex="1" />(<em>yakuter.com</em>)</td>
		</tr>
		<tr>
			<td class="bilgisi">Parola</td>
			<td><input type="password" name="yparola" id="yparola" class="kutucuk" tabindex="2" />(<em>yakuter.com</em>)</td>
		</tr>
		<tr>
			<td class="bilgisi"></td>
			<td><input onclick="ekle();" type="submit" class="dugme" tabindex="3" value="Giriş yap"/></td>
		</tr>
		</table>
		</form>
		
	</div>
	
	<div id="altbilgi">
		<a href="http://www.yakuter.com/ygiris-yakuter-giris-betigi/">yGiriş | Yakuter Giriş Betiği</a> |
		Telif Hakkı &copy; 2008 &nbsp;|&nbsp;
		<a href="http://www.yakuter.com/" title="yakuter">yakuter</a> | 
		<a href="http://www.pehepe.org/" title="php">pehepe</a>
	</div>
</div>

</body>
</html>