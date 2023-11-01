<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('803126110638-prtor4bv161i5ia5h33nn3gbhg1h5g78.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI

$google_client->setRedirectUri('http://localhost/GameArena/googleloginapi/index.php');
// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
