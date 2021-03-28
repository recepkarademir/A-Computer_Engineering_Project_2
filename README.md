![logo](https://raw.githubusercontent.com/recepkarademir/Computer-Engineering-Project-2/master/GitHub%20Images/php-crud%20(2).jpg) [![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat)](https://github.com/recepkarademir/A-Computer_Engineering_Project_2/blob/master/LICENSE)

# Mühendislik Projesi Dersi Ödev 2
FULL‐STACK WEB DEVELOPER / UYGULAMA GELİŞTİRME GİRİŞ
------------------------------
22 Ocak 2018

Recep KARADEMİR
____________________________________________________________________________________________________________________________________

Özet:
------------------------------

Hazırladığım web uygulaması front‐end ve back‐end geliştirme süreçlerini içerir.

Uygulamamda Front‐End olarak CSS tercih ettim. Database kısmında MySql

Back‐End olarak PHP(Html işaretleme dili de kullanıldı) ve server tarafında Apache kullandım.

Projede kullanılan araçlar :GIT, Atom, Notepad++,Gitdesktop,XAMPP,WAMPSERVER

------------------------------
[D]URUM [A]DET [K]ONUM Projesi

Site; giriş yapma, kayıt olma, eşya ekleme, eşya silme, eşya güncelleme ve eşya listeleme yapabilmektedir.

Bu proje evde veya iş yerinde var olan fakat yeri, adedi ve durumu bilinmeyen eşyaların kontrol altında tutulabilmesi için geliştirilmiştir. Kullanıcı siteyle, kayıt olarak veya giriş yaparak etkileşime geçecektir.

Kullanıcı sahip oluğu eşyaların durumlarını, siteye giriş yaparak veri tabanına kaydedebilmektedir.

Kayıtlı kullanıcı eşya konrol panelinden eşyalarla ilgili istediği işlemi yapabilir.



GİRİŞ
------------------------------

Bu proje evde veya iş yerinde var olan fakat yeri, adedi ve durumu bilinmeyen eşyaların kontrol altında tutulması için geliştirilmiştir.

Bazen, ihtiyacımız olan eşyaya sahip olduğumuzu biliriz fakat eşyanın yerini,durumunu ve adedini unuturuz.

Bu ve buna benzer durumlar eşyanın yeri, durumu ve adedi güncel olarak tutularak çözülebilir.

Örneğin, bir depoda eşyaların üzerlerine yerleştirilen etiket ile eşyanın bilgileri ve anlık hareketi etiket okuyucuları tarafından algılanarak bu sisteme otomatik girilirse, eşyaların durumu sistemde güncel olarak kontrol edilebilir.

Hatta, eşya temin edildiği an bir kez sisteme kaydedilmesi bile bazen yeterli olacaktır.

Yani kullanılan eşya alındığı yere bırakıldığında veya kullanılıp atık olduğunda, ikinci kez kullanılmak istenilirse, sistemdeki son konumuna bakıp eşyanın bittiği veya kullanılmış olduğu sistem güncellenmeden ve olası diğer yerlere bakılmadan bile bilinebilir.

Sistemin tam olarak sorunsuz çalışması için etkileşime geçilen eşyayla ilgili güncelleme yapılmalıdır.

Güncellemeler yapılmasa dahi, eşya temin edildiğinde sisteme girilmişse, eşyanın son konumuna bakarak eşyanın akıbeti öğrenilebilir.



UYGULAMA
------------------------------
![logo](https://raw.githubusercontent.com/recepkarademir/Computer-Engineering-Project-2/master/GitHub%20Images/CRUD.jpg)

Php, html ve css kullanılarak hazırlanan site, eşya durum konrolü yetkisini giriş yapan kullanıcıya verir.

Giriş yapan kullanıcı etkileşime geçtiği eşyanın son durumunu sisteme girmelidir.

Eşyaların durumu ve konumu böylelikle kontrol altında tutulmuş olur.


------------------------------
Proje hazırlama aşaması:

Atom, Notepad++, Sublime Text veya başka kod editörü(Dreamweaver vs.) ile yazacağınız kodları düzenleyebilirsiniz.

Ben editör olarak Notepad++ kullanacağım. 

Projemizde sunucu ve veritanı kullanılacağından WampServer veya Xampp gereklidir. 

WampServer ve Xampp programları Apache, MySQL ve diğer bileşenleri içerdiğinden WampServer veya Xampp kurmanız işinizi kolaylaştıracaktır.

Siteye giriş yapabilmek için Wampserver veya Xampp gibi Apache ve MySQL barındıran bir 
program kullanmanız gerekir. 

İsterseniz Apache'yle MySQL'i ayrı olarak da kurabilirsiniz. Projemde WampServer kullanacağım.

İsterseniz Xampp da kullanabilirsiniz(WampServer ve Xampp aynı anda kullanamanız önerilmez). 

Xampp için C:\wamp64\www\  yerine  C:\xampp\htdocs\ konumunu proje klasörü olarak kullanmalısınız.

İleride kullanacağımız phpmyadmin erişimi için ise XAMPP Control Panel’inden Apache ve MySQL start konuma getirilmelidir.

(Görev çubuğundan Xampp'e sağ tıklayarak da Apache ve MySQL start konuma getirebilirsiniz.) 

Adres kısmına localhost/phpmyadmin/   yazdığınızda phpmyadmin çalışacaktır.

Github'ı versiyon kontrol sistemi aracı olarak tercih edebilir ve kodunuzda yaptığınız her değişikliği 
görebilirsiniz. Ben projemde GithubDesktop aracını kullanıyorum.

------------------------------
GithubDesktop Temel Kullanımı

GithubDesktop'ı bilgisayarınıza kurun ve  github.com'dan Github hesabı açıp yeni bir repository oluşturun.

GithubDesktop uygulamasında File sekmesinden Clone repository'e tıklayın. Github hesabınızla giriş yaptıktan sonra oluşturduğunuz repository i seçin.

Local Path kısmından C:\wamp64\www\repositoryadı olacak şekilde seçin ve klonlayın. 

Artık www klasörü içerisindeki klasörde yapılacak her değişiklik GithubDesktop tarafından algılanacak ve changes kısmından commit ettiğinizde kaydedilecektir. Yaptığınız değişikleri belli aralıklarla Gihub'a push etmeyi unutmayın. 

Push origin yazan yere tıkladığınızda değişiklikler Github hesabınıza yüklenecektir.

Hazırlayacağımız siteyi test etmek için bir internet tarayıcınızın olması gerekmektedir.

Google Chrome, Opera, Iexplorer, Safari, Mozilla, Vivaldi, Edge, YandexBrowser vs.
Türkçe karakter sorunu için Notepad++ encoding-encode in utf-8 bom seçeneğini seçsinler.



Xampp ve WampServer için phpmyadmin paneli farklıdır. Hangisi kullanılacaksa veri tabanı onun phpmyadmin panelinden kurulması gerekir.

C:\wamp64\www   klasörünün içine veya C:\xampp\htdocs  klasörünün içine, proje klasörünüzü atın.

Benim projem DAK bu klasörde.  Php ile kodlanan sitenin çalışabilirliği internet tarayıcısıyla doğrulanır.

Tarayıcının adres kısmına  http://localhost/projenizinadı/    yazarak test işlemlerinizi yapabilirsiniz.

Benim projemde herhangi bir ad değişkliği vs. yapmayın. Proje DAK adlı proje klasörüne ve dak.sql adlı veritabanına göre hazırlanmıştır.

Proje işlevsel olarak çalıştığında CSS ile site görselleştirilmeleri yapılır.

Benim görselleştirme stil dosyam cs.css 'dir.

Sitenin planlandığı şekilde çalışıp çalışmadığı kontrol edilir. 

Hatalar eksiklikler giderilir. Site için gerekli açıklamalar ve sadeleştirmeler yapılarak proje tamamlanır.


___________________________________________________________________________________________________________________________________

İletişim
------------------------------

2015141003@cumhuriyet.edu.tr

https://recepkarademir.blogspot.com.tr

https://recepkarademir.wordpress.com



## BU PROJENİN KULLANILABİLİRLİK SEVİYESİ: 4/10
