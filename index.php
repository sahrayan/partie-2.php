<?php
require_once "exo13.php";
// echo $voiture2 ->Accelerer(20);
// // echo $voiture2 ->Demarrer();
// // echo $voiture2 ->verifieStatut();
// // echo $voiture2 ->Accelerer(50);
// // echo $voiture2 ->Arret();
echo $voiture1 = new Voiture("Peugeot","205",5);
// echo $voiture2 ->Accelerer(20);
// // echo $voiture1 ->verifieStatut();
// echo $voiture1->Accelerer(50);
// // echo $voiture1->Accelerer(50);
// echo $voiture1 ->Ralentir(20);
// echo $voiture1 ->verifieVitesse();

//echo $voiture1 ->setStatut(0);
//echo $voiture1 ->verifieStatut();

// echo $voiture1 -> limite(20);
// echo $voiture1 -> verifieVitesse;




  $voiture2= new Voiture("Citroen","c4",5);
  echo $voiture2 ->Demarrer();
  echo $voiture2 ->Arret();
  
  echo $voiture2 ->verifieStatut();
  echo $voiture2 ->Accelerer(20);
  ?>