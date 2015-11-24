<?php




session_start();
require 'vendor/autoload.php';

use Aws\Sns\SnsClient;
$client = SnsClient::factory(array(
'version' =>'latest',	
'region' => 'us-west-2'
));



#publish

$result = $client->publish(array(
    'TopicArn' => 'arn:aws:sns:us-west-2:138293925568:mp2',

    'Message' => 'best',

));









?>