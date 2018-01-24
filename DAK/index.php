<?php // Hiçbir yerden direkt olarak eşya menüsüne izinsiz erişememesi için.
	session_start();// SESSION ları kullanabilmek için.
	$izin=0; // izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin; // SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<html>

	<head>
		<title>ANA MENÜ</title>
		<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
	</head>

	<body>
		<h2>Giriş yapın veya kayıt olun</h2>
		
		<form id="form" action="giris.php" method="post"> <!--  form yardımıyla post metodunu kullanarak butona basıldığında giris.php ye git -->
			<button type="submit" class="btn" >GİRİŞ YAP</button>  <!-- Giriş yap butonu. btn etiketli css stilini kullan -->
		</form>

	
		<form id="form" action="kayit.php" method="post"> <!--  form yardımıyla post metodunu kullanarak butona basıldığında kayit.php ye git -->
			<button type="submit" class="btn" >&nbsp;KAYIT OL</button> <!-- Kayıt ol butonu. btn etiketli css stilini kullan. &nbsp; boşluk ekler.-->
		</form>
		
		<a href="bilgi.php">SİSTEM HAKKINDA BİLGİ</a> <br/>
		
	</body>

</html>