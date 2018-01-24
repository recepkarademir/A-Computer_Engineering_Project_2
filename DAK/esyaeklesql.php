<link rel="stylesheet" href="cs.css"><!-- CSS kullanabilmek için. -->
<form action="crudesya.php" method="post"> <!-- İşlemler bittiğinde yönetim paneline dönecek. -->
			<?php
			session_start();
			$test=$_SESSION["test"]; // yetkisiz giriş engeli.

			if($test ==0)
			{
				?><form id="form" actin="" method="">    
				<?php
				echo '<b style="color:red"><br> ! Yetkisiz giriş !<br><br>Yönlendiriliyorsunuz... </b>';
				echo '<meta http-equiv="refresh" content ="1;URL=http://localhost/DAK/giris.php">';
				session_destroy();
				die; ## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. girissql.php deyken denerse giremeyecek.
				## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. giris.php deyken denerse giremeyecek.
				?>
				</form>
				<?php
	
			}
			require("sqlconnect.php");
			@$Esyaadi   = $_POST["esya_adi"];
			@$Konum     = $_POST["konum"]; 
			@$Adet	   = $_POST["adet"];
			@$Marka     = $_POST["marka"]; // Marka ekleme veya güncelleme yapılırken boş bırakılabilir.
			@$Durum     = $_POST["durum"];
			@$esya_kodu= $_GET['esya_kodu'];
			?>	
			
			<?php
				if($Esyaadi == "" || $Konum == "" || $Adet == "" || $Durum == "") // Boş alan olmamalı. Marka alanı hariç. Marksız eşya olabilir.
				{
					echo '<b style="color:red">Boş alan var <br> Yönlendiriliyorsun... !</b>';
					echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/esyaekle.php">';
				}
				else if($Durum>3 || $Durum<1)
				{
					echo '<b style="color:red">Durum 1 , 2 veya 3 olarak girilmelidir. <br> Yönlendiriliyorsun... !</b>';
					echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/esyaekle.php">';
				}
				else if($Adet<0 || $Adet>99999)
				{
					echo '<b style="color:red">Eşya adeti [1,99999] aralığında girilmelidir. <br> Yönlendiriliyorsun... !</b>';
					echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/esyaekle.php">';
				}
				else
				{
					echo "<br>";
					$ekle = $dak -> prepare("INSERT INTO esya SET esya_adi = ?, konum = ?, adet = ?, marka= ?, durum = ?"); // SQL injection engellemek için prepare kullandık.
					$ekle ->execute(array($Esyaadi,$Konum,$Adet,$Marka,$Durum)); // Gidecek veriler bir dizi yardımıyla gönderiliyor.
				
					if($ekle)
					{
						echo '<b style="color:green">Ekleme başarılı <br>Yönetici sayfasına yönlendiriliyorsunuz...</b>'; // kayıt başarılı bir şekilde gerçekleştirildi.
						echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/crudesya.php">';
					}
					else
					{
						echo '<b style="color:red">Ekleme başarılı olmadı !</b>'; // Ekleme başarılı bir şekilde gerçekleştirilemedi.
						echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/crudesya.php">';
					}
				}
			?>
</form>