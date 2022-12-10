<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00726534503e55980b4dcfee42fcc371
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Product\\Pakistan\\' => 17,
            'Product\\China\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Product\\Pakistan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Items/India',
        ),
        'Product\\China\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Items/Nepal',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00726534503e55980b4dcfee42fcc371::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00726534503e55980b4dcfee42fcc371::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00726534503e55980b4dcfee42fcc371::$classMap;

        }, null, ClassLoader::class);
    }
}
