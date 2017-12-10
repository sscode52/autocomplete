<?php

$data = unserialize(file_get_contents('countries.txt'));
$dataLen = count($data);
sort($data);
$results = array();
for ($i=0;$i<$dataLen &&count($results) <10;$i++){

	//If(stripos($data[$i], $_GET['s']) === 0){

	array_push($results, $data[$i]);
	//}
}

echo implode('|', $results);
?>


to get JSON as your dataset, 

$string = file_get_contents("/home/Hamdy/test.json");



decode the Json into an associative array
$json = json_decode($string, true);


we have the array, you can access the values we need. print the content of the array print_r($json, true)


select your data using a sql query and store them in an array like we did