<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

if ($response->hasHeader('Content-Type')) {
    echo implode(', ', $response->getHeader('Content-Type')) . "\r\n";
    $header = GuzzleHttp\psr7\parse_header($response->getHeader('Content-Type'));
    foreach ($header as $value) {
        var_dump($value);
        if (array_key_exists('charset', $value)) {
            echo $value['charset'];
        }
    }
}
