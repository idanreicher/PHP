<?php

declare(strict_types = 1);

namespace App\Helpers;

use \App\Exceptions\NotFoundException;

class Config
{
    public static function get(string $filename, string $key = null)
    {
        $fileContent = self::getFileContent($filename);
        
        if ($key === null) {
            return  $fileContent;
        }
               
        return isset($fileContent[$key]) ? $fileContent[$key] : [];
    }

    public static function getFileContent(string $filename)
    {
        $fileContent = [];
        
        try {
            $path = realpath(sprintf(__DIR__ . '/../Config/%s.php', $filename));
            if (file_exists($path)) {
                $fileContent = require $path;
            }
        } catch (\Throwable $th) {
            throw new NotFoundException(
                sprintf('file : %s not found', $filename),
                ['no file', 'data passed']
            );
        }

        return $fileContent;
    }
}
