<?php




use Aws\Sns;
require 'vendor/autoload.php';

use Aws\Rds\RdsClient;
$client = RdsClient::factory(array(
'version' =>'latest',	
'region' => 'us-west-2'




#publish

$result = $client->subscribe(array(
    'TopicArn' => "arn:aws:sns:us-west-2:138293925568:mp2",
    'Protocol' => 'email',
    'Endpoint' => "lrui@hawk.iit.edu",
));

$result = $client->publish(array(
    'TopicArn' => 'arn:aws:sns:us-west-2:138293925568:mp2',

    'Message' => 'best',

));









?>