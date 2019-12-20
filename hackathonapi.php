<?php
$cloudant_username = "5c3d0e19-e0e9-4b4e-b4c4-560bc730aea3-bluemix";
	$cloudant_password = "6c554ec1b6e090226fce403272f41a62a93414bbdb6d47d0bb05c95f04f7ddcb";
	$dbhost = "5c3d0e19-e0e9-4b4e-b4c4-560bc730aea3-bluemix.cloudantnosqldb.appdomain.cloud";
	$dbname = "friendbot_db";
	$authstring = $cloudant_username.":".$cloudant_password."";//Creating an Authenticaiton String for accessing the Cloudant DB


$url = "https://".$authstring."@".$dbhost."/".$dbname."/_all_docs?include_docs=true&";


//echo $url;
//echo $data;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_NOBODY, 0);
//curl_setopt($ch, CURLOPT_FAILONERROR, 1);

$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
$rows=$response['rows'];
$i=0;
foreach($rows as $data){
	$hack_list[$i]=$data['doc']['hack_info'];
	$i++;
}
//print_r($hack_list);

?>
