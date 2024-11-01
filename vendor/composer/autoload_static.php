<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9457430dc7c2728674532aead9f08e1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Recurr\\' => 7,
        ),
        'D' => 
        array (
            'Doctrine\\Deprecations\\' => 22,
            'Doctrine\\Common\\Collections\\' => 28,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Recurr\\' => 
        array (
            0 => __DIR__ . '/..' . '/simshaun/recurr/src/Recurr',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
        'Doctrine\\Common\\Collections\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/collections/lib/Doctrine/Common/Collections',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9457430dc7c2728674532aead9f08e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9457430dc7c2728674532aead9f08e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9457430dc7c2728674532aead9f08e1::$classMap;

        }, null, ClassLoader::class);
    }
}
