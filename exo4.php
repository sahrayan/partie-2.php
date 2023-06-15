<?php
$capitales = [
    "ALLEMAGNE"=>"Berlin",
    "FRANCE"=>"Paris",
    "ITALIE"=>"Rome",
    "USA"=>"Washington",
    ];
foreach ($capitales as $pays => $capitale) {
    echo "le pays $pays a pour capitale : $capitale <br>";
}


echo afficherTableHtml($capitales);
function afficherTableHtml($capitales) {
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                     <th>Capitales</th>
                     <th>Lien</th>
                    </tr>
                </thead>
          <tbody>" ;
foreach ($capitales as $pays => $capitale){
    $result .= "<tr>
                    <td>$pays</td> 
                    <td>$capitale</td>
                    <td><a href = 'https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</td>
                </tr>";
}
$result .= "</tbody></table>";
return $result;
}
?>