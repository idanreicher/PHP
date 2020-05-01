<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;
use \GuzzleHttp\Exception\ServerException as ServerException;
use \GuzzleHttp\Exception\ClientException as ClientException;

try {
    $client = new Client();
    $response = $client->request(
        'GET',
        // 'http://jsonplaceholder.typicode.com/posts/bar' // 404
        'https://httpbin.org/status/503' // 503
    );
    var_dump($response);
    echo $response->getBody();
} catch (ExceptionHandler $e) {
    echo $e->getCode() . " -> \r\n"
               . $e->getMessage()
        ;
} catch (ServerException $e) {
    echo $e->getCode() . " -> \r\n"
               . $e->getMessage()
        ;
}
