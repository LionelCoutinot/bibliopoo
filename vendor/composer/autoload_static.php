<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ebcb20324cee75761f69b4504fb8a6e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ebcb20324cee75761f69b4504fb8a6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ebcb20324cee75761f69b4504fb8a6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
