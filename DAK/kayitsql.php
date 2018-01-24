<?php // Hiçbir yerden direkt olarak esya menüsüne izinsiz erişememesi için.
	session_start(); // SESSION ları kullanabilmek için.
	$izin=0; // izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin; // SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<html>

	<head>
		<meta charset="UTF-8" />   <!-- Türkçe karakter için. -->
		<title>Giriş Sayfası</title>  <!-- Sayfa başlığı -->
		<link rel="stylesheet" href="cs.css">  <!-- CSS kullanabilmek için. -->
	</head>
	
	<body>
		<?php
			require("sqlconnect.php"); // include yerine require kullanıldı çünkü hatayla karşılaşılaşildığında işleme devam edilmesin. Veri tabanına bağlantı kuruluyor.
		
			// POST Metodu ile kayit.php deki veriler  kayitsql.php dosyasına çağrılıyor.
			@$Kullanici = $_POST["kullanici"];
			@$Sifre     = $_POST["sifre"]; // Küçük büyük harf duyarlı olduğundan böyle tanımlamalar yapıldı.
			@$Sifre2	   = $_POST["sifre2"];
			@$Mail      = $_POST["mail"];
			// Veri çağırma bitti.
		?>
		
		<form action="kayit.php" method="post">  <!-- Hata olduğunda kullanıcı tamam butonuna basarsa kayıt ekranına yönlendirilecek. kayit.php ye gidecek. -->
			
			<?php
			if($Kullanici == "" || $Sifre == "" || $Sifre2 == "" || $Mail == "")   // Eğer gerekli alanlardan bazısı boşsa.
			{
				echo '<b style="color:red">Boş Alan Bırakmayınız ! </b>';?>
				<br><button class="err" type="submit">Tamam</button><?php // err etiketli css stilini kullan.
			}
			else
			{
				if((!filter_var($Mail,FILTER_VALIDATE_EMAIL))) // ....@....com şeklinde girilmesi için.
				{
					echo '<b style="color:red">Mail Formatı Hatalı ! </b>';?>
					<br><button class="err" type="submit">Tamam</button><?php // err etiketli css stilini kullan.
				}
				else
				{
					if($Sifre != $Sifre2)// Eğer şifreler uyuşmazsa buradan tekrar kayit.php ye gidecek.
					{
						echo '<b style="color:red">Girdiğiniz şifreler uyuşmuyor ! </b>';?>
						<br><button  class="err" type="submit">Tamam</button><?php // err etiketli css stilini kullan.
					}
					else
					{
						$sorgula = $dak -> prepare("SELECT *FROM uyeler WHERE kullanici = ? OR mail = ?"); // Kullanıcı adı veya maili aynı olan kişler kayıt yapamaz.
						$sorgula ->execute(array($Kullanici,$Mail)); // kullanici ler ve mail ler veri tanından kontrol için seçiliyor.
						
						if($sorgula -> rowCount() > 0)// Kullanıcı veya mail önceden kayıtlıysa,kayıt yapacağı kayit.php sayfaya gidecek.
						{
							echo '<b style="color:red">Kayıt başarılı olmadı !<br>E-posta veya kullanıcı adı önceden kullanılmış!<br><br>Yönlendiriliyorsunuz... </b>'; // kayıt başarılı bir şekilde gerçekleştirilemedi.
							echo '<meta http-equiv="refresh" content ="5;URL=http://localhost/DAK/kayit.php">';
						}
						else
						{
							$kayityap = $dak -> prepare("INSERT INTO uyeler SET kullanici = ?, sifre = ?, mail = ?"); // SQL injection engellemek için prepare ve ? kullandık.
							$ekle = $kayityap ->execute(array($Kullanici,$Sifre,$Mail)); // Kaydedilecek veriler tabloyo kaydediliyor. Gidecek veriler bir dizi yardımıyla gönderiliyor.
							
							if($ekle)
							{
								echo '<b style="color:green">Kayıt başarılı <br>Giriş sayfasına yönlendiriliyorsunuz...</b>'; // kayıt başarılı bir şekilde gerçekleştirildi.
								echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/giris.php">';
							}
							else
							{
								echo '<b style="color:red">Kayıt başarılı olmadı !</b>'; // kayıt başarılı bir şekilde gerçekleştirilemedi.
								echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/kayit.php">'; // en kötü senaryoda kayit.php gidecek.
							}
						}
					}
				}
			}
			?>
		</form>
	
		<br><br>
		<a class="" href="http://localhost/DAK/index.php">Ana Menü<a/>
		
	</body>
	
</html>