<?php

$info = array("Nom","Prenom","Ville");
echo afficherInput($info);
function afficherInput($info){
    foreach($info as $nom){
        echo  "<label for='$nom'><br>$nom</label><br>
        <input type='text' name= $nom<br>";
        
    }
}

?>

<!-- <thead>
    <meta charset="utf-8" />
    <title>
        formulaire html
    </title>
</thead>

<tbody>
    <from action "reponse.php" methode ="GET"><br>
    Votre Nom :<input type="text" name="nom"><br>
    Votre Prénom :<input type="text" name="prénom"><br>
    Votre Ville :<input type="text" name="ville"><br>
    <p>
        <input type="submit" value="Ajouter">
    </p>
    </from>

<tbody> -->