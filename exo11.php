<?php
$date ="27-01-2004";

$dateDuJour = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL,IntlDateFormatter::NONE);

echo $dateDuJour->format(date_create($date)),"<br>";

?>