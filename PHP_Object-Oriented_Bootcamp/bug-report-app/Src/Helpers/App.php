<?php

declare(strict_types = 1);

namespace App\Helpers;

use DateTimeInterface;
use DateTime;
use DateTimeZone;

class App
{
    private $config = [];

    public function __construct()
    {
        $this->config = Config::get('app');
    }

    public function isDebugMode(): bool
    {
        return !isset($this->config['debug']) ?  false : $this->config['debug'];
    }

    public function getEnviroment(): string
    {
        return !isset($this->config['env']) ?  'production' : $this->config['env'];
    }

    public function getLogPath(): string
    {
        return !isset($this->config['log_path']) ? new \Exception('path not defined') : $this->config['log_path'];
    }

    public function isRunningFromCli(): bool
    {
        return php_sapi_name() == 'cli' || php_sapi_name() == 'phpbg';
    }

    public function getServerTime(): DateTimeInterface
    {
        return new DateTime('now', new DateTimeZone('UTC'));
    }
}
