<?php
ini_set('max_execution_time', 300);
set_time_limit(300);

$url ='https://newsapi.org/v2/everything?q=health&apiKey=6a4578751d194b77ab0cde8b4678e141';


$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute

$result=curl_exec($ch);
// Closing
curl_close($ch);

// dumps the json to an variable
$result3 =json_decode($result, true);
?>
