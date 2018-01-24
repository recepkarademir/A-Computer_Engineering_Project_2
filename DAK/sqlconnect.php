<html>
	<head>
		<meta charset="UTF-8" />   <!-- Türkçe karakter için. -->
		<link rel="stylesheet" href="style.css"><!-- CSS kullanabilmek için. -->
	</head>
</html>

<?php

	try
	{	// Veri tabanýna baðlanýrken karþýlaþýlan hatalarýn tespit edilmesi için.
		$dak = new PDO("mysql:host=localhost; dbname=dak; charset=utf8", "root", ""); //
		$dak -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dak -> exec("set names utf8");
	}
	catch(PDOExection $hata)
	{
		print $hata -> getMessage(); // Hata yakalandýðýnda hata mesajý yazdýrýlacak.
	}
?>