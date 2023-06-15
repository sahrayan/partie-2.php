<?php
$element = array("choix 1", "choix 2 ", "choix 3");
alimenterLestDeroulante($element);
function alimenterLestDeroulante($element){
    foreach ($element as $value) {
        echo '<input type=checkbox name='. $value. '">'.$value.'</option></option><br>';
    }
}
?>