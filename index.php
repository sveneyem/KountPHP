<?php

//  The settingsloader.php must be included.  This PHP file loads the config file
//  settings, parses them, and sets the environment for both Collection and 
//  for Kount Access SDK.  This allows the merchant to choose "Test" or 
//  "Production" and not have to worry about entering correct URL or Domains

require __DIR__ . '/./settingsloader.php';


//  Checks for a session and loads it if none exists
$session = session_id();

if (!$session) {
  session_start();
  $session = session_id();
};


?>


<html>
	<head>

		<!-- 	The following is a collection script.  It is placed in the header of the page so that it kicks off immediately.
				All of the settings are loaded from config.ini which is parsed using the settingsloader.php (this file is required
				at the beginning of the page).
				The Collection Server and the Image Server are based on the iniEnvironment choice in config.ini
				Merchant_id is based on the iniMerchantID in Config.ini
				
				**SessionID is based on the session creation and will depend on how a site is managing sessions.  If session IDs are
				assigned to a php variable $session, then the sample code below will work.  If a site uses a different variable for
				session id, replace that in the URLs below.
				
				
		-->
		
 		<script type="text/javascript" src='<?=$CollectionServer?>m=<?=$merchant_id?>&s=<?=$session?>'></script>
     	<img width="1" height="1" src='<?=$ImageServer?>m=<?=$merchant_id?>&s=<?=$session?>'/>

	</head>


		<!--	Display the current sessionID with a link to create a new session.  newsession.php wipes out the current
				session and then returns to the referring page where a new session is created.
		-->


	<body class='kaxsdc' data-event='load'>
		<div id = "demo">		
			<h2> Collection </h2>
			If you have input your settings correctly, hitting this page will generate a collection.
		</div>
	</body>
</html>
			
			