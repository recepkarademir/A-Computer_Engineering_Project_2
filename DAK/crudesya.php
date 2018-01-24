<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
<?php
	session_start();
	
	$test=$_SESSION["test"];

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
	require("sqlconnect.php"); // include yerine require kullanıldı çünkü hatayla karşılaşıldığında işleme devam edilemesin.
?>
<html>

	<head>
	
		<meta charset="UTF-8" />
		<title>Eşya kontrol paneli</title>
		
	</head>
	
	<body>
	
	<h2 align="center">Eşya Takip Sistemi<br>
	
	KAYITLI EŞYALAR</h2>
	
	<a class="bos" align="center" href="http://localhost/DAK/esyaekle.php">Eşya eklemek için tıklayın<a/> <br><br>
	<a class="bos" href="http://localhost/DAK/index.php">Çıkış Yap<a/><br><br>
	
	<table width="97%" border="5px">
			<tr>
				<th>Esya kodu</th>
				<th>Eşya adı</th>
				<th>Konumu</th>
				<th>Adedi</th>
				<th>Markası</th>
				<th>Durumu</th>
				<th>Güncelle</th>
				<th>Sil</th>
			</tr>
			<?php
				echo "   Durum 1 , 2 veya 3 olarak girilmelidir [ 1 : yeni | 2 : yıpranmış | 3 : arızalı]";
				$izin=1; // Crud yönetim panelinde sayfayı sorunsuz yenileyebilmek için.
				$_SESSION["test"]=$izin; // Crud yönetim panelinde sayfayı sorunsuz yenileyebilmek için.
		
				$sorgula = $dak -> query("SELECT *FROM esya "); // Kullanıcı adı veya sifre kontrol.
				
				while($row=$sorgula ->fetch(PDO::FETCH_ASSOC))
				{
					
					Print "<tr>";
						Print '<td align="center">'. $row['esya_kodu'] . "</td>";
						Print '<td align="center">'. $row['esya_adi'] . "</td>";
						Print '<td align="center">'. $row['konum']. "</td>";
						Print '<td align="center">'. $row['adet']."</td>";
						Print '<td align="center">'. $row['marka']."</td>";
						Print '<td align="center">'. $row['durum']."</td>";
						Print '<td align="center"><a href="gncl.php?esya_kodu='. $row['esya_kodu'] .'">Güncelle</a> </td>';
						Print '<td align="center"><a href="#" onclick="myFunction('.$row['esya_kodu'].')">Sil</a> </td>';
					Print "</tr>";
		
				}
				?>
			
	</table>
	<script>
	function myFunction(esya_kodu)
			{
			var r=confirm("Bu kaydı gerçekten silmek istiyor musun?");
			if (r==true)
			  {
			  	window.location.assign("sil.php?esya_kodu=" + esya_kodu);
			  }
			}
	</script>
	</body>
	
</html>