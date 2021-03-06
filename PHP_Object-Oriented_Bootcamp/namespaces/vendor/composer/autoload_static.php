<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit390f544dc10bdc3a312cd696126f45fa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\Test' => __DIR__ . '/../..' . '/src/Test.php',
        'App\\Record' => __DIR__ . '/../..' . '/src/Record.php',
        'App\\Student' => __DIR__ . '/../..' . '/src/Student.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit390f544dc10bdc3a312cd696126f45fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit390f544dc10bdc3a312cd696126f45fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit390f544dc10bdc3a312cd696126f45fa::$classMap;

        }, null, ClassLoader::class);
    }
}
