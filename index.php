<?php 
require_once "exo13.php";
$v1 = new Voiture("Peugot","408",3);


echo $v1->Start();
echo $v1->verifieStatut();
echo $v1->Faster(50);
echo $v1->Faster(50);
echo $v1->Ralentir(20);
echo $v1->verifieVitesse();


 // echo $v1->verifieSpeed();
//echo $v1->Arret();
?>