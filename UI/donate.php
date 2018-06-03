<?php
session_start();
$projectId=$_POST["projectId"];
$fund=$_POST['fund'];
$userId=$_SESSION['userId'];
echo $projectId;
echo $fund;
echo $userId;
include 'constants.php';
require './vendor/autoload.php';

use GuzzleHttp\Client;
$body['funds'] = $fund;
$body['project'] = $projectId;
$client = new GuzzleHttp\Client();
$url = $apiUrl;
$res = $client->request('POST', $apiUrl."funds/userFundProject/".$userId,[ 'body' => json_encode($body), 'headers' => [
    'Content-Type' => 'application/json'
  ] ]);
$project=json_decode($res->getBody(), true);
if($res->getStatusCode() == 201){
    header("location: thanks.php");
}
?>
