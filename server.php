<?php
$albumArray_json = file_get_contents('dischi.json');
$albumArray = json_decode($albumArray_json, true);
header('Content-Type: application/json');
echo json_encode($albumArray)

?>