<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

use Aws\Exception\AwsException;

$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region' => 'eu-west-1'
]);

while(true)
{
    $result = $s3->listBuckets([]);
    echo json_encode($result['Owner']);
    echo PHP_EOL;
    sleep($_ENV["INTERVAL_TIME"]);
}