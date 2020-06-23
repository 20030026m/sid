<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '896989017762-iumoeksl5mdtk5ptvighm9i4vmcpt5ht.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'JL-3v71lfkIecfwYJxqD2pTk'; //Google client secret
$redirectURL = 'http://localhost:80/instrumPro.php/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>