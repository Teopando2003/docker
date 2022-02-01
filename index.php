<?php 
$fileData = json_decode(file_get_content("data.json"));
foreach ($fileData as $indice => $valore){
    $d = $valore -> dato;
    echo "[$indice] $valore<br>";
}
$newVlore = new stdClass();
$newValore -> dato = ($d+1);
$fileData[] = $newValore;
file_put_content("data.json", json_encode($fileData))
?>