<?php

include 'constants.php';
require './vendor/autoload.php';

use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$email =  $_POST["email"];
$password = $_POST["password"];
$body['password'] = $password;
$url = $apiUrl;
$res = $client->request('POST', $apiUrl."users/login/".$email, [ 'body' => json_encode($body), 'headers' => [
        'Content-Type' => 'application/json'
    ] ]);
$var=json_decode($res->getBody(), true);

if($res->getStatusCode() == 200){
  header('location: index.php');
}
?>