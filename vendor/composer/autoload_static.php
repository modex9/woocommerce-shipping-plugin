<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0379f4a7e60de0a37707981e28ca684
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pakettikauppa\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pakettikauppa\\' => 
        array (
            0 => __DIR__ . '/..' . '/pakettikauppa/api-library/src/Pakettikauppa',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0379f4a7e60de0a37707981e28ca684::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0379f4a7e60de0a37707981e28ca684::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc0379f4a7e60de0a37707981e28ca684::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
