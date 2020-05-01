<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request(
    'POST',
    'http://jsonplaceholder.typicode.com/posts',
    [
        'json' => [
            'title' => 'guzzle rest title',
            'body' => 'guzzle rest body',
            'id' => 12
        ],

    ]
);

var_dump($response);
echo $response->getBody();
