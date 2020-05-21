<?php
declare(strict_types = 1);
namespace App\Exceptions;

use App\Helpers\App;
use ErrorException;
use Throwable;

class ExceptionHandler
{
    public function handle(Throwable $exception): void
    {
        $app = new App();
       
        if ($app->isDebugMode()) {
            var_dump($exception);
        } else {
            echo 'something is not right ,try again';
        }

        exit;
    }

    public function warningsNoticesToException($severity, $message, $file, $line)
    {
        throw new ErrorException($message, $severity, $severity, $file, $line);
    }
}
