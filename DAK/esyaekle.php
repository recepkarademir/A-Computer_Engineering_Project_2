<html>

	<head>
		<meta charset="UTF-8" />   <!-- Türkçe karakter için. -->
		<title>Esya ekleme</title>
		<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
	</head>
	
	<body>
		<form id="body" method="POST" action="esyaeklesql.php"> <!-- Eşya ekle butonuna basınca. -->
		<?php 
			
			session_start();
			$test=$_SESSION["test"]; // yetkisiz giriş engeli.

			if($test ==0)
			{
				echo '<b style="color:red"><br> ! Yetkisiz giriş !<br><br>Yönlendiriliyorsunuz... </b>';
				echo '<meta http-equiv="refresh" content ="1;URL=http://localhost/DAK/giris.php">';
				session_destroy();
				die; ## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. girissql.php deyken denerse giremeyecek.
				## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. giris.php deyken denerse giremeyecek.
	
			}
			require("sqlconnect.php"); // include yerine require kullanıldı çünkü hatayla karşılaşıldığında işleme devam edilemesin.
			echo "Boş Alan Bırakmayınız<br>(Marka alanı isteğe bağlı boş bırakılabilir)<br>";
			echo "   Durum : [ 1 : yeni | 2 : yıpranmış | 3 : arızalı]";
		?>
			
			<input type="text" name="esya_adi" placeholder   ="Eşya adı" /><br><br>
			<input type="text" name="konum"    placeholder   ="Konumu" /><br><br>
			<input type="text" name="adet"     placeholder   ="Eşya adedi" /><br><br>
			<input type="text" name="marka"    placeholder   ="Eşyanın markası" /><br><br>
			<input type="text" name="durum"    placeholder   ="Eşyanın durumu" /><br><br>
			<input type="submit" class="success" value="Eşyayı ekle"/>  <a> 
			
			<br><br><br>   <a class="btn" href="http://localhost/DAK/crudesya.php">Yönetici Paneli<a/>
			<br><br>   <a class="bosn" href="http://localhost/DAK/index.php">Ana Menü<a/>
		</form>
	</body>
	
</html>