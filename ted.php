<?php

require "credentials.php";


$url = "https://".$authstring."@".$dbhost."/".$dbname."/_all_docs?include_docs=true&limit=100";


//echo $url;
//echo $data;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_NOBODY, 0);
//curl_setopt($ch, CURLOPT_FAILONERROR, 1);

$response = curl_exec($ch);
curl_close($ch);

$response2 = json_decode($response, true);
//echo($response);

//$response['ok'] will be true if the code is added successfully
//echo( $response);
//print_r($response);

?>
