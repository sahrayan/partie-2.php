<?php
$element = array("Monsieur", "Madame ", "Autre");
afficherRadio($element);
function afficherRadio($element){
    foreach ($element as $value) {
        echo '<input type=radio name='. $value. '">'.$value.'</option></option><br>';
    }
   
}
?>