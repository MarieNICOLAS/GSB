<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a54458bada374555573da9a03e35857
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GSB\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GSB\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a54458bada374555573da9a03e35857::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a54458bada374555573da9a03e35857::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a54458bada374555573da9a03e35857::$classMap;

        }, null, ClassLoader::class);
    }
}
