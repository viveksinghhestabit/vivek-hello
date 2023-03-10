<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8413543a7213890264bb99674f4bfb4e
{
    public static $files = array (
        '06e7ef9c41b768c354ef5ee60c7968c2' => __DIR__ . '/../..' . '/src/Vivek/Password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RandomPassword\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RandomPassword\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Vivek',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8413543a7213890264bb99674f4bfb4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8413543a7213890264bb99674f4bfb4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8413543a7213890264bb99674f4bfb4e::$classMap;

        }, null, ClassLoader::class);
    }
}
