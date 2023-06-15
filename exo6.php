<?php
$element = array("Monsieur", "Madame", "Mademoiselle",);
alimenterLestDeroulante($element);

function alimenterLestDeroulante($element){
    echo "<select>";
    foreach($element as $element){
        echo "<option value='$element'>$element</option>";
    }
    echo "</select>";
}
?>