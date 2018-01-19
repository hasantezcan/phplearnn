<?php
  $model1= "Mercedes";
  $model2= "Opel";
  $model3= "BMW";
  $model4= "Peugeot";


// SATISAL DIZELER
//version 1
  $modeller = array("Mercedes","Opel","BMW","Peugeot");

//version 2
  $modeller[0]= "Mercedes";
  $modeller[1]= "Opel";
  $modeller[2]= "BMW";
  $modeller[3]= "Peugeot";


// CAGRISIMSAL DIZELER
$puanlar0 = arry("ali" => 10, "hasan"=>15,"murat"=>22,"ayse"=>32);

$puanlar ["ali"]= 10;
$puanlar ["hasan"]= 15;
$puanlar ["murat"]= 22;
$puanlar ["ayse"]= 32;

//DIZE ICINDE DIZE (COKLU DIZELR)
$aileler = array(
      "Elicalıskan" => array("Murat","cigdem","Esra"),
      "Kececioglu" => array("Yavuz","Mustafa")
   );

   echo $aileler["Elicalıskan"][0] . ", Elicalıskan ailesinin bir üyesidir.";



 ?>
