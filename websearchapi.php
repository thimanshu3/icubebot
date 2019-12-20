
<?php
$query = $_POST['message'];
$query = str_replace(' ', '', $query);
//echo $stripped;

$url ='https://api.labs.cognitive.microsoft.com/answersearch/v7.0/search?q='.$query;
$url = $url.'&mkt=en-us&count=5&safeSearch=Strict&offset=0';
//$apikey = "c18c133c95c74ed09aa1ce190c765ecb";
//$url1 = "https://api.cognitive.microsoft.com/bing/v7.0/search/?q=narendra+modi";
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Ocp-Apim-Subscription-Key: 6d119b467d564725aae46e6aca0dfa7e"));
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute

$result=curl_exec($ch);
// Closing
curl_close($ch);

//dumps the json to an variable
$result4 =json_decode($result, true);
//$result4  = $result4['webPages']['value'][]['snippet'];
print_r($result4['webPages']['value']['0']['snippet']);
//echo $result;
?>
