<?php
// This script gets the values from the Config.ini and parses them
// This script also make it so that developers only need to change 
// the Environment variable to "Test" or "Production" to switch back and
// forth to different environements
//  Replace the subdomain and domain with information retreived from
//  Kount's Client Success


$ini = parse_ini_file("config.ini");
$merchant_id = $ini["iniMerchantID"];
$server_name = $ini["iniServerName"];  
$api_key = $ini["iniApiKey"];
$Environment = $ini["iniEnvironment"];

if ($Environment = "Test") {
	
	$KAServerName = "SUBDOMAIN_HERE.kountaccess.com";
	$CollectionServer = "https://DOMAIN_HERE/collect/sdk?";
	$ImageServer = "https://DOMAIN_HERE/logo.gif?";
	
     } elseif ($Environment = "Production") {
	 	
	$KAServerName = "SUBDOMAIN_HERE.kountaccess.com";
	$CollectionServer = "https://DOMAIN_HERE/collect/sdk?";
	$ImageServer = "https://DOMAIN_HERE/logo.gif?";
		
		} else {
	
	$KAServerName = "SUBDOMAIN_HERE.kountaccess.com";
	$CollectionServer = "https://DOMAIN_HERE/collect/sdk?";	
	$ImageServer = "https://DOMAIN_HERE/logo.gif?";		
		      };

					




?>