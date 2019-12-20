<?php
	//Cloudant Database Credentials

	$cloudant_username = "5c3d0e19-e0e9-4b4e-b4c4-560bc730aea3-bluemix";
	$cloudant_password = "6c554ec1b6e090226fce403272f41a62a93414bbdb6d47d0bb05c95f04f7ddcb";
	$dbhost = "5c3d0e19-e0e9-4b4e-b4c4-560bc730aea3-bluemix.cloudantnosqldb.appdomain.cloud";
	$dbname = "vesaithon_db";
	$authstring = $cloudant_username.":".$cloudant_password."";//Creating an Authenticaiton String for accessing the Cloudant DB

	//$designdocument = "<YOUR DESIGN DOCUMENT NAME HERE>";
	//$searchindex = "<YOUR SEARCH INDEX NAME HERE>";//Search indexes are created for faster excecution of custom queries on Cloudant DB

?>
