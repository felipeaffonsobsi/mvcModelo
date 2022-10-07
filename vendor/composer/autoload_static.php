<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22aaa11ceee2886058a1be03a76fb00a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit22aaa11ceee2886058a1be03a76fb00a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22aaa11ceee2886058a1be03a76fb00a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22aaa11ceee2886058a1be03a76fb00a::$classMap;

        }, null, ClassLoader::class);
    }
}
