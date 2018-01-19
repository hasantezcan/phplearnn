<?php
$kelime = "Hamama giden terler";

$kelime2='Jakuziyi kim bulmus da girmis';

echo $kelime;

echo $kelime2;

$adet=7;

$degisken= "$adet adet donatı hangi polis yedi($adet)!";

echo $degisken;

$ahmed= "Ankara'nın koylusu! ankaranın kedisi \"gözleri mavi olur\"... ";

echo $ahmed;


//KELIME BIRLESTIRME..

echo "<br>";
echo $degisken . " " . $ahmed ;

//strlen() fonksiyonu..... !!!

echo strlen($ahmed);

// strpos() Fonksiyonu ... !!!
echo "<br>" ;
$hasan= "Beni bul!";
      //012345678   olarak gorulur...

echo strpos( $hasan , "bul");




 ?>
