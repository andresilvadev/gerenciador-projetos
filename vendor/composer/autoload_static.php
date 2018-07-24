<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a8ab05ec4714f6e8b0b286fa6a609e0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'ALS\\Framework\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'ALS\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a8ab05ec4714f6e8b0b286fa6a609e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a8ab05ec4714f6e8b0b286fa6a609e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9a8ab05ec4714f6e8b0b286fa6a609e0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
