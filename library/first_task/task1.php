<?php
$json = file_get_contents('one.json');
$data = file_get_contents('two.json');
// Decodeing  the json file:
$json_data = json_decode($json,true);
$results = json_decode($data,true);
 // Displaying the json data
print_r($json_data);
print_r($results);
?>