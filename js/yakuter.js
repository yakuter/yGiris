function ekle(){

if( document.getElementById('ykullanici').value.length < 1 ) {		
	$('div.durum').html( '<div class="hata">Lütfen Kullanıcı Adınızı giriniz!</div>');
}

else if( document.getElementById('yparola').value.length < 1 ) {
	$('div.durum').html( '<div class="hata">Lütfen Parolanızı giriniz!</div>');
}

else {

	var a = "ykullanici="+document.getElementById('ykullanici').value;
	var b = "yparola="+document.getElementById('yparola').value;
	var c = "ip="+document.getElementById('ip').value;
	var sc = a+"&"+b+"&"+c;

	$('div.durum').html('<br /><center><img src="loadingAnimation.gif"></center>');
	$.ajax({
		type: "POST",
		url: "kontrol.php",
		data: sc,
		success: function(msg){
		if (msg=="ok")
			{
			$('div.durum').html('<div class="tamam">Giriş Başarılı :) Panele yönlendiriliyorsunuz...</div>');
			setTimeout("window.location = 'index.php';",1000);
			}
		else
			{$('div.durum').html( '<div class="hata">'+msg+'</div>');}
	   }
	});
	}

}