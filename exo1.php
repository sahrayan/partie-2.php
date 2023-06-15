<style>
    .red{
        color :red;
    }
</style>
<?php
$text = "Mon text en rouge";

echo convertirMajRouge($text);
function convertirMajRouge($text){
    $maj= mb_strtoupper($text);
    $maj = "<p class='red'><b>$maj</b></p>";
    return $maj;
}


?>