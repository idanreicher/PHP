<?php
require 'vendor/autoload.php';
use GuzzleHttp\Psr7;

$streame = Psr7\stream_for('this is a simple string data');

echo $streame . PHP_EOL;
echo $streame->getSize() . PHP_EOL;
echo $streame->isReadable() . PHP_EOL;
echo $streame->isWritable() . PHP_EOL;
echo $streame->isSeekable() . PHP_EOL;

$streame->write('test');
$streame->rewind();
echo $streame->read(5) . PHP_EOL;
echo $streame->getContents() . PHP_EOL;
echo $streame->eof() . PHP_EOL;
