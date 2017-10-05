<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$client = new Client();

$client->messages->create(
    '+12013567811',
    array(
        'from' => '+19082937511',
        'body' => 'Hello from Suman Saurabh CS 643 Fall 2017'
    )
);

?>

