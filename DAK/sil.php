<?php
	require("sqlconnect.php");
	$esya_kodu= $_GET['esya_kodu']; // silinecek veri alınıyor.
	$sil = $dak ->prepare("DELETE FROM esya WHERE esya_kodu=?"); // istenilen sütundaki veriler siliniyor.
	$temizle = $sil ->execute(array($esya_kodu));
	header("location: crudesya.php"); // silinme bitti.
?>