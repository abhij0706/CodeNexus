<?php
require_once 'vendor/autoload.php';
session_start();

$config = require 'oauth_config.php';
$providerName = $_GET['provider'] ?? $_SESSION['provider'] ?? null;

if (!$providerName) exit('No provider specified.');

switch ($providerName) {
    case 'google':
        $provider = new League\OAuth2\Client\Provider\Google($config['google']);
        break;
    case 'github':
        $provider = new League\OAuth2\Client\Provider\Github($config['github']);
        break;
    case 'linkedin':
        $provider = new Stevenmaguire\OAuth2\Client\Provider\LinkedIn($config['linkedin']);
        break;
    default:
        exit('Unknown provider');
}

if (!isset($_GET['code'])) {
    exit('No authorization code received.');
}

try {
    $accessToken = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    $user = $provider->getResourceOwner($accessToken);
    $_SESSION['username'] = $user->getName() ?? $user->getNickname();
    $_SESSION['email'] = $user->getEmail() ?? null;

    // 👉 Optional DB logic: check if user exists, else insert
    header('Location: index.php');
    exit;

} catch (Exception $e) {
    exit('Login failed: ' . $e->getMessage());
}
