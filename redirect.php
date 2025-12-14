<?php
require_once 'vendor/autoload.php';
$config = require 'oauth_config.php';

$provider = $_GET['provider'];

switch ($provider) {
    case 'google':
        $oauth = new League\OAuth2\Client\Provider\Google($config['google']);
        break;
    case 'github':
        $oauth = new League\OAuth2\Client\Provider\Github($config['github']);
        break;
    case 'linkedin':
        $oauth = new League\OAuth2\Client\Provider\LinkedIn($config['linkedin']);
        break;
    default:
        exit('Unknown provider');
}

session_start();
$_SESSION['provider'] = $provider;
$_SESSION['oauth2state'] = $oauth->getState();

header('Location: ' . $oauth->getAuthorizationUrl());
exit;
