<link rel="stylesheet" href="cs.css"> <!-- CSS kullanabilmek için. -->
<?php
	session_start();
	$test=$_SESSION["test"];

	if($test ==0)
	{	?>
		<form id="form" actin="" method="">    <?php
		echo '<b style="color:red"><br> ! Yetkisiz giriş !<br><br>Yönlendiriliyorsunuz... </b>';
		echo '<meta http-equiv="refresh" content ="1;URL=http://localhost/DAK/giris.php">';
		session_destroy();
		die; ## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. girissql.php deyken denerse giremeyecek.
		## Eğer giriş yapmadan gelmeye çalışırsa burdan sonrasına erişemeyecek. giris.php deyken denerse giremeyecek.
		?></from><?php
	}
	require("sqlconnect.php");
	$esya_kodu=$_GET['esya_kodu'];
	$_SESSION["esya_kodu"]=$esya_kodu;
	
?>

<html>

	<head>
		<meta charset="UTF-8" />
		<title>UPDATE</title>
		
	</head>
	
	<body>
	GÜNCELLEMEK İSTEDİĞİNİZ EŞYANIN ESKİ BİLGİLERİ</h2>
	<table width="90%" border="10px">
			<tr>
				<th>Esya kodu</th>
				<th>Eşya adı</th>
				<th>Konumu</th>
				<th>Adedi</th>
				<th>Markası</th>
				<th>Durumu</th>
			</tr>
			<?php
				
		
				$sorgula = $dak -> query("SELECT *FROM esya Where esya_kodu=$esya_kodu");
				
				while($row=$sorgula ->fetch(PDO::FETCH_ASSOC))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['esya_kodu'] . "</td>";
						Print '<td align="center">'. $row['esya_adi'] . "</td>";
						Print '<td align="center">'. $row['konum']. "</td>";
						Print '<td align="center">'. $row['adet']."</td>";
						Print '<td align="center">'. $row['marka']."</td>";
						Print '<td align="center">'. $row['durum']."</td>";
					Print "</tr>";
				}
				
			?>
	</table>
		<form name="form" method="POST" action="gnclsql.php">
			Durum 1 , 2 ve 3 olarak girilmelidir <br>[ 1 : yeni | 2 : yıpranmış | 3 : arızalı]</br>
			<br>Boş* Alan Bırakmayınız<br>(*Marka alanı isteğe bağlı boş bırakılabilir)</br>
			<input type="text" name="esya_adi" placeholder   ="Eşya adı" /><br>
			<input type="text" name="konum"    placeholder   ="Konumu" /><br>
			<input type="text" name="adet"     placeholder   ="Eşya adedi" /><br>
			<input type="text" name="marka"    placeholder   ="Eşyanın markası" /><br>
			<input type="text" name="durum"    placeholder   ="Eşyanın durumu" /><br>
			<input type="submit" value="Eşyayı Güncelle"/>  <a> 
			
			<br><br><br>   <a class="" href="http://localhost/DAK/crudesya.php">Yönetici Paneli<a/>
			<br><br>   <a class="" href="http://localhost/DAK/index.php">Ana Menü<a/>
		</form>
		
	</body>
	
</html>