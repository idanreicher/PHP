<?php

$output = substr('hello', -1, 3);
echo $output .'<br>';

$output = strlen('hello');
echo $output .'<br>';

$output = strpos('hello', 'l');
echo $output .'<br>';

$output = strrpos('hello', 'l');
echo $output .'<br>';

$output = trim(' hello hello', ' ');
var_dump($output) .'<br>';

$output = strtoupper('hello');
echo $output .'<br>';

$output = strtolower('Hello world');
echo $output .'<br>';

$output = ucwords('hello world');
echo $output .'<br>';

$output = str_replace('world', 'one', 'hello world');
echo $output .'<br>';

$output = 'world';
echo is_string($output) .'<br>';

$output = 'worldsdfasefaesfasadasdawdawd';
$outputcom =  gzcompress($output) .'<br>';
echo "$outputcom <br>";


echo gzuncompress($outputcom) .'<br>';
