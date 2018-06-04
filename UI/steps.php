<?php

require './vendor/autoload.php';
include 'constants.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$steps=$_POST['addmore'];
$body['projectSteps'] = $steps;
$body['projectId'] = $_POST['projectId'];

$url = $apiUrl."projects/steps";

$response = $client->request('POST', $url, [ 'body' => json_encode($body), 'headers' => [
    'Content-Type' => 'application/json'
  ] ]);

  echo $response->getStatusCode();

?>