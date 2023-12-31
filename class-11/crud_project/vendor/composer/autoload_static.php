<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92365092209881a41d2c0e45d9bbc39d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecom\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecom\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92365092209881a41d2c0e45d9bbc39d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92365092209881a41d2c0e45d9bbc39d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92365092209881a41d2c0e45d9bbc39d::$classMap;

        }, null, ClassLoader::class);
    }
}
