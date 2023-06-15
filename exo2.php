<table border="1">
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td> 
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>





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
function afficherTableHtml($capitales){
$result = "<table border=1>;
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capital</th>
                </tr>
            <thead>
        <tbody>";

foreach ($capitales as $pays => $capitale) {
    $result = "<tr>
                  <td>$pays</td>
                    <td>$capitale</td>
                </tr>";
}

$result .= "</tbody></table>";
return $result;
}
?>