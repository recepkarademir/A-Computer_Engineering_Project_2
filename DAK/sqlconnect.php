<html>
	<head>
		<meta charset="UTF-8" />   <!-- T�rk�e karakter i�in. -->
		<link rel="stylesheet" href="style.css"><!-- CSS kullanabilmek i�in. -->
	</head>
</html>

<?php

	try
	{	// Veri taban�na ba�lan�rken kar��la��lan hatalar�n tespit edilmesi i�in.
		$dak = new PDO("mysql:host=localhost; dbname=dak; charset=utf8", "root", ""); //
		$dak -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dak -> exec("set names utf8");
	}
	catch(PDOExection $hata)
	{
		print $hata -> getMessage(); // Hata yakaland���nda hata mesaj� yazd�r�lacak.
	}
?>