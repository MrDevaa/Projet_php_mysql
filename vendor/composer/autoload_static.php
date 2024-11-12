<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49275945fe6d1fef384a356e56208179
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Narut\\Projectphp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Narut\\Projectphp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit49275945fe6d1fef384a356e56208179::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49275945fe6d1fef384a356e56208179::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49275945fe6d1fef384a356e56208179::$classMap;

        }, null, ClassLoader::class);
    }
}
