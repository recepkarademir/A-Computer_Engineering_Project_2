<link rel="stylesheet" href="cs.css">  <!-- CSS kullanabilmek için. -->
<?php // Hiçbir yerden direkt olarak esya menüsüne izinsiz erişememesi için.
	session_start(); // SESSION ları kullanabilmek için.
	$izin=0;// izin 0 yapılıyor yani giriş izni şimdilik yok.
	$_SESSION["test"]=$izin;// SESSION kullanarak başka sayfalara izin durumu taşınıyor.
?>
<?php ## Bu sayfa sistem hakkında bilgiler içerir.
echo "<br> [D]URUM&nbsp&nbsp;&nbsp;&nbsp;[A]DET&nbsp;&nbsp;&nbsp;&nbsp;[K]ONUM&nbsp;&nbsp;&nbsp;&nbsp;PROJESİ<br><br>Bu proje evde veya iş yerinde var olan fakat yeri, adedi ve durumu bilinmeyen eşyaların kontrol altında tutulması için geliştirilmiştir.<br>
Örneğin, bir depoda eşyaların üzerlerine yerleştirilen etiket ile eşyanın bilgileri ve anlık hareketi etiket okuyucuları tarafından <br>
algılanarak bu sisteme otomatik girilirse, eşyaların durumu sistemde güncel olarak kontrol edilebilir.<br><br>
Bazen, ihtiyacımız olan eşyaya sahip olduğumuzu biliriz fakat eşyanın yerini,durumunu ve adedini unuturuz.<br>
Bu ve buna benzer durumlarda eşyanın yeri, durumu ve adedi güncel olarak sistemde tutulursa çözülebilir.<br>
Hatta, eşyanın temin edildiği an, bir kez sisteme kaydedilmesi bile bazen yeterli olacaktır.<br>
Kullanılan eşya alındığı yere bırakıldığında veya kullanılıp atık olduğunda, ikinci kez kullanılmak istenilirse sistemdeki son konumuna bakıp eşyanın<br>
bittiği veya kullanılmış olduğu sistem güncellenmeden ve olası diğer yerlere bakılmadan bile bilinebilir.<br><br>
Sistemin tam olarak sorunsuz çalışması için etkileşime geçilen eşyayla ilgili güncelleme yapılmalıdır.<br>
Güncellemeler yapılmasa dahi, eşya temin edildiğinde sisteme girilmişse, eşyanın son konumuna bakarak eşyanın akıbeti öğrenilebilir.<br><br>Projeye katkılarından
dolayı İbrahim Varol'a teşekkür ederim.<br>";


?>
<br>
<a href="index.php">Ana menüye dönmek için tıkla</a> <br/>  <!-- Anasayfaya geri dönüş. -->
