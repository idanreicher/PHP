<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\RequestException;

$client = new Client();
$promis = $client->requestAsync(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

$promis->then(
    function (Response $response) {
        echo $response->getBody();
    },
    function (RequestException $e) {
        echo $e->getMessage();
    }
);

$promis->wait();
