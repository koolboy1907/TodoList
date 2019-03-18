<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e52357a319a52539d1e0f4baf89ed4b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TodoList\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TodoList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e52357a319a52539d1e0f4baf89ed4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e52357a319a52539d1e0f4baf89ed4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
