
<?php
//$query = $_POST['search']


$url ='https://feed.grepsr.com/json/GPcRS8r';
$url2 ='https://api.duckduckgo.com/?q=youtube&format=json&pretty=1';


$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute

$result=curl_exec($ch);
// Closing
curl_close($ch);

//dumps the json to an variable
$result4 =json_decode($result, true);

echo $result;

?>
