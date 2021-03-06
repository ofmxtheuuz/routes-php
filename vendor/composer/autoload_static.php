<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf72998e2ce419c617a72c2a36136f342
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf72998e2ce419c617a72c2a36136f342::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf72998e2ce419c617a72c2a36136f342::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf72998e2ce419c617a72c2a36136f342::$classMap;

        }, null, ClassLoader::class);
    }
}
