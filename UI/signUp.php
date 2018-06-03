<?php

require './vendor/autoload.php';
include 'constants.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();

 $url =$apiUrl."users/register/";
 $body['fname'] = $_POST["fname"];
 $body['lname'] = $_POST["lname"];
 $body['password'] = $_POST["password"];
 $body['email'] = $_POST["email"];
 $body['userType'] = $_POST["userType"];

 $response = $client->request('POST', $url, [ 'body' => json_encode($body), 'headers' => [
  'Content-Type' => 'application/json'
] ]);
 $code = $response->getStatusCode();
echo $response->getStatusCode();
if($code == 201)
   header('Location: welcome.php');
   if($response['code'] != 201)
{
   header('Location: registration.php');
}

?>