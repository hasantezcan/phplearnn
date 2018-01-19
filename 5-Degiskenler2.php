PHP'de bir değişken önceden tanımlanmadan kullanılır.
Örneğin bir değişken belirlediğimizde, o bu değeri ilk kez alıyordur.
Buna bağlı türü, yapısı vb değişkenlik gösterebilir.

Bu durumun istisnası DEFINE( tanım, değer ) komutudur.
Böylelikle $ işareti ile başlamayan değişmez bir değer oluşturmuş oluruz:

<?php
  define ('PI', 3,14);

  echo PI;  //3,14 yazdırır.
 ?>
