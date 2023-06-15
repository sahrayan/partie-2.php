<?php

$info = array("Nom","Prenom","Adresse mail","Ville","Sexe");

function afficherInput($info){
    foreach($info as $nom){
        echo  "<label for='$nom'><br>$nom</label><br>
        <input type='text' name= $nom<br>";
        
    }
}


$element = array("Développeur Logiciel", "Designer web", "Intégrateur","Chef de projet<br>");

function alimenterListDeroulante($element){
    echo "<br><select><br>";
    foreach($element as $element){
        echo "<br><option value='$element'>$element</option><br>";
    }
    echo "</select>";
}
echo "<form>";
$info = array("Nom","Prénom","Adresse mail","Ville","Sexe");
echo afficherInput($info);
$element = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");
alimenterListDeroulante($element);
echo '<br><input type="button" value="Validé"/>';
echo "</form>";
?>