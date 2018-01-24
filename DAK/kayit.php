<?php // Hiçbir yerden direkt olarak esya menüsüne izinsiz erişememesi için.
	session_start();// SESSION ları kullanabilmek için.
	$izin=0; // izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin;// SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<html>

	<head>
		<meta charset="UTF-8" /> <!-- Türkçe karakter için. -->
		<title>Üye kayıt</title>
		<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
	</head>
	
	<body>
			<form id="form" method="POST" action="kayitsql.php"> <!-- Kayıt ol butonuna tıklanınca kayitsql.php ye gidecek. -->
				<input type="text"     name="kullanici" placeholder="Kullanıcı adınız" /><br> <!-- placeholder form alanlarındaki silik yazılar için -->
				<input type="password" name="sifre"     placeholder="Şifreniz" /><br>    <!--  sifre password formatında -->
				<input type="password" name="sifre2"    placeholder="Şifrenizi tekrar girin" /><br>  <!--  sifre password formatında -->
				<input type="text"     name="mail"      placeholder="Mailiniz" /><br>   <!--  mail text formatında -->
				<input type="submit"   class="btn"      value="Kayıt ol"/>  <a>  <!-- Bilgiler veri tabanına kayıt olmak üzere kayitsql.php ye gidiyor.-->
				<br><br><br> <a class="" href="http://localhost/DAK/index.php">Ana Menü<a/>   <!-- Anasayfaya geri dönüş. -->
			</form>
	</body>
	
</html>