<?php
require 'vendor/autoload.php';
use Aws\Rds\RdsClient;
$client = RdsClient::factory(array(
'version' =>'latest',
'region'  => 'us-west-2'
));

echo "begin database";
$link = mysqli_connect("itmo544grh-mp1.ckh0wwv6itjw.us-west-2.rds.amazonaws.com","rui","110224Fish","itmoruidb") or die("Error " . mysqli_error($link));

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$create_table = 'CREATE TABLE comments IF NOT EXISTS items  
(
    id INT NOT NULL AUTO_INCREMENT,
    uname VARCHAR(20),
    email VARCHAR(200) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    filename VARCHAR(255) NOT NULL,
    s3rawurl VARCHAR(255) NOT NULL,
    s3finishedurl VARCHAR(255) NOT NULL,
    jpg_filename VARCHAR(255),
    status INT NOT NULL,
    issubscribed INT NOT NULL,
    timestamp dtaetime,
    PRIMARY KEY(id)
)';
$create_tbl = $link->query($create_table);
if ($create_table) {
	echo "Table is created or No error returned.";
}
else {
        echo "error!!";  
}
$link->close();
?>