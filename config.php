<?php
require_once(__DIR__.'/Facebook/autoload.php');



define ('APP_ID', '533144291603438');// te dhenat e mia prej facebook-ut
define ('APP_SECRET', '57a4a633b93de1715a850ac0c59d8d40');//prej fb
define ('API_VERSION', 'v2.5');//api versionin
define ('FB_BASE_URL', 'http://localhost/projekti_PI');


define('BASE_URL', 'http://localhost/projekti_PI');



if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>