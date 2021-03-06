<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61ba78aae7ad251c424de6cfc3d97bc5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Book\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Book\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61ba78aae7ad251c424de6cfc3d97bc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61ba78aae7ad251c424de6cfc3d97bc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit61ba78aae7ad251c424de6cfc3d97bc5::$classMap;

        }, null, ClassLoader::class);
    }
}
