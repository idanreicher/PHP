<?php

declare(strict_types = 1);

use App\Logger\Logger;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Exceptions/exception.php';


$logger = new Logger;

$logger->info('User created', ['id' => 1]);
$logger->log(\App\Logger\LogLevel::EMERGENCY, 'emergency level test', ['exception' => 'emergency occured']);
$logger->alert( 'info level test', ['exception' => 'info occured']);
