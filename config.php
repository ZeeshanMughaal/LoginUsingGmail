<?php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'loginwithgoogle');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', 'Your App Client Key');
define('GOOGLE_CLIENT_SECRET', 'Your App Secret Key');
define('GOOGLE_REDIRECT_URL', 'http://127.0.0.1/GoogleLogin');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-plus-api-client/src/Google_Client.php';
require_once 'google-plus-api-client/src/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);