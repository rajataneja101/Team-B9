<?php

require './vendor/autoload.php';
include 'constants.php';
use GuzzleHttp\Client;
session_start();
$client = new GuzzleHttp\Client();

 $url =$apiUrl."projects/register/";
 $body['project'] = $_POST["projectId"];
 $body['projectName'] = $_POST["projectName"];
 $body['description'] = $_POST["description"];
 $body['fundingDone'] = $_POST["fundingDone"];
 $body['fundingRequired'] = $_POST["fundingRequired"];
 $body['user'] = $_SESSION['userId'];
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