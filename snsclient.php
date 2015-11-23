<?php




use Aws\Sns;
require 'vendor/autoload.php';

use Aws\Rds\RdsClient;
$client = RdsClient::factory(array(
'version' =>'latest',	
'region' => 'us-west-2'




#publish

$result = $client->subscribe(array(
    'TopicArn' => "",
    'Protocol' => 'email',
    'Endpoint' => "lrui@hawk.iit.edu",
));










?>