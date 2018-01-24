<?php // Hiçbir yerden direkt olarak esya menüsüne izinsiz erişememesi için.
	session_start();// SESSION ları kullanabilmek için.
	$izin=0; // izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin; // SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<html>

	<head>
		<meta charset="UTF-8" /> <!-- Türkçe karakter için. -->
		<title>Üye giriş</title>
		<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
	</head>
	
	<body>
			<form id="form" method="POST" action="girissql.php"> <!-- Giris yap butonuna tıklanınca girissql.php ye gidecek. -->
			
				<input type="text"     class="bos"   name="kullanici" placeholder="Kullanıcı adınız" /><br> <!-- placeholder form alanlarındaki silik bilgi yazıları için -->
				<input type="password" class="bos"   name="sifre"     placeholder="Şifreniz" /><br> <!-- Kullanıcı ve şifre bilgileri alınıyor. -->
				<input type="submit"   class="btn"   value="Giriş Yap"/>  <a>  <!-- Bilgiler veri tabanında kontrol edilmek üzere girissql.php ye gidiyor.-->

				<br><br><br><a  href="http://localhost/DAK/index.php">Ana Menü<a/>  <!-- Anasayfaya geri dönüş. -->
			</form>
	</body>
	
</html>