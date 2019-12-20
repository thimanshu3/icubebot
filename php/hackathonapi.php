<?php
ini_set('max_execution_time', 300);
set_time_limit(300);

$url ='https://feed.grepsr.com/json/GPcRS8r';


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
$result =json_decode($result , true);


?>
