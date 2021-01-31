<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '319470118467-j6afrbh1ub91uuavodh9d6emoo1ngj23.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'cWGBpjwFQXXGOpDSnUicc-28'; //Google client secret
$redirectURL = 'http://localhost/google%20login/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>