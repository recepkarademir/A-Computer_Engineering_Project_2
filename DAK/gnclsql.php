<?php
	session_start();
	@$esya_kodu=$_SESSION["esya_kodu"]; // esya kodu burda lazım.
?>

<html>
	<head>
		<meta charset="UTF-8" />   <!-- Türkçe karakter için. -->
		<title>UPDATE</title>
		<link rel="stylesheet" href="cs.css">  <!-- CSS kullanabilmek için. -->
	</head>
	
	<body>
	
			<?php 
				require("sqlconnect.php"); // veri tabanına bağlanılıyor.
				@$Esyaadi   = $_POST["esya_adi"];
				@$Konum     = $_POST["konum"]; 
				@$Adet	   = $_POST["adet"];
				@$Marka     = $_POST["marka"];
				@$Durum     = $_POST["durum"];
				if($Esyaadi == "" || $Konum == "" || $Adet == "" || $Durum == "")   // Eğer gerekli alan(lar)dan bazısı boşsa.
				{?>
					<form id="form" action="" method="post"><?php
					echo '<b style="color:red"><br> ! Boş Alan Bırakmayınız !<br><br>Yönlendiriliyorsunuz... </b>';
					echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/crudesya.php">';
					die;?>
					</form>
				<?php
				}
				$Guncelle = $dak ->prepare("UPDATE esya SET esya_adi=?, konum=?, adet=?, marka=?, durum=? where esya_kodu=?");
				$Guncelle ->execute(array("$Esyaadi","$Konum","$Adet","$Marka","$Durum","$esya_kodu"));
				?>
				<form id="form" action="" method="post"><?php
					echo '<b style="color:green">Güncelleme başarılı <br>Yönlendiriliyorsunuz...</b>';
					echo '<meta http-equiv="refresh" content ="2;URL=http://localhost/DAK/crudesya.php">';?>
				</form>
			<br><br>   <a class="" href="http://localhost/DAK/index.php">Ana Menü<a/>
	</body>
	
</html>