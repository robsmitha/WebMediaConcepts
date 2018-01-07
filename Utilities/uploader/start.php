<?php



use Aws\S3\S3Client;

require 'aws/vendor/autoload.php';

$config = require('s3config.php');

$credentials = new Aws\Credentials\Credentials($config['s3']['credentials']['key'], $config['s3']['credentials']['secret']);

$s3 = new Aws\S3\S3Client([
    'version'     => $config['s3']['version'],
    'region'      => $config['s3']['region'],
    'credentials' => $credentials
]);