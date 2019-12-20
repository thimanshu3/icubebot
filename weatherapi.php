<?php 
$url ='https://community-open-weather-map.p.rapidapi.com/weather?id=2172797&units=%22metric%22+or+%22imperial%22&mode=xml%2C+html&lat=24.518285&lon=73.7592213';


$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$headers = [
    'X-RapidAPI-Key: 7d796142a6msh44df980e8c92988p131c26jsn1ba13cfa9f84'
	];
	
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result=curl_exec($ch);
// Closing
curl_close($ch);
 
// dumps the json to an variable 
//$result=json_decode($result, true);


echo $result;

?>
