<?php
$stepId = $_POST['stepsCompleted'];
echo 
session_start();
require './vendor/autoload.php';
include 'constants.php';
use GuzzleHttp\Client;
$client = new GuzzleHttp\Client();

for($i=0;$i<count($stepId,COUNT_NORMAL);$i++){
 $url =$apiUrl."projects/steps/".$stepId[$i];
 $response = $client->request('POST', $url, [ 'headers' => [
  'Content-Type' => 'application/json'
] ]);
 $code = $response->getStatusCode();
echo $response->getStatusCode();
if($code == 200)
   header('location: thanks.php');
}
?>