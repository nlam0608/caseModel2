<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8c61beb57b0fbe4ea892d66b9ad8c1e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8c61beb57b0fbe4ea892d66b9ad8c1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8c61beb57b0fbe4ea892d66b9ad8c1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8c61beb57b0fbe4ea892d66b9ad8c1e::$classMap;

        }, null, ClassLoader::class);
    }
}