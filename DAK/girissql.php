
<link rel="stylesheet" href="cs.css"><!-- CSS kullanabilmek için. -->
<?php // Hiçbir yerden direkt olarak esya menüsüne izinsiz erişememesi için.
	session_start();  // SESSION ları kullanabilmek için.
	$izin=0;  // izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin;  // SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<?php
	require("sqlconnect.php"); // include yerine require kullanıldı çünkü hatayla karşılaşıldığında işleme devam edilemesin.
	
	// POST Metodu ile giris.php deki veriler bu php dosyasına çağrılıyor.
	@$Kullanici = $_POST["kullanici"]; // POST metodu yardımıyla formdan gelen veriler alınıyor.
	@$Sifre     = $_POST["sifre"];    // Küçük büyük duyarlı olduğundan böyle tanımlamalar yapıldı.
	
	$sorgula = $dak -> prepare("SELECT *FROM uyeler WHERE kullanici = ? AND sifre = ?"); // Veri tabanından kullanıcı adı ve sifre kontrolü için veriler çekiliyor..
	$sorgula ->execute(array($Kullanici,$Sifre)); // Veriler array(dizi) kullanarak çekiliyor.
	$sqloku = $sorgula -> fetch(PDO::FETCH_ASSOC);
?>

	<form action="giris.php" method="post">  <!-- Eğer giriş ekranındaki alan(lar) boş bırakılırsa giris.php gidecek.-->
		<?php
			if($Kullanici == "" || $Sifre == "")   // Eğer gerekli alanlardan bazısı boşsa.
			{
				echo '<b style="color:red"><br>Boş Alan Bırakmayınız</b>';?>
				<br><button class="err" type="submit">Tamam</button><?php // err etiketli css stilini kullan.
			}
			else if($sorgula -> rowcount()<=0) // Eğer kullanıcı kayıtlı değilse giriş sayfasına gidecek. Kullanıcıya kayıtlı veri varsa rowcount() 1 olur.
			{
				echo '<b style="color:red"><br>Kullanıcı kayıtlı değil !<br> Kullanıcı veya şifre hatalı girildi !<br><br>Yönlendiriliyorsunuz... </b>'; 
				echo '<meta http-equiv="refresh" content ="5;URL=http://localhost/DAK/giris.php">'; // giriş başarılı bir şekilde gerçekleştirilemedi. giris.php git.
			}
			else if($sorgula -> rowcount()>=0)// Kullanıcı kayıtlıysa, eşyalar üzerinde işlem yapacağı sayfaya gidecek.
			{
				$izin=1; // Kullanıcı eşya menüsüne ulaşabilir oldu.
				$_SESSION["test"]=$izin;
				echo '<b style="color:green">Giriş başarılı <br>Yönetim sayfasına yönlendiriliyorsunuz...</b>'; // kayıt başarılı bir şekilde gerçekleştirildi.
				echo '<meta http-equiv="refresh" content ="3;URL=http://localhost/DAK/crudesya.php">'; // Eşya kontrol paneline gidiyor. 3sn içinde
			}
		?>
		<br><br>
		<a class="" href="http://localhost/DAK/index.php">Ana Menü<a/> <!-- Anasayfaya geri dönüş. -->
	</form>