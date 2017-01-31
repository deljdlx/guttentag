<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit266694db4199de57346fc73b9b3435da
{
    public static $files = array (
        '3eff0d63a6cba6d0e3344d5b1fff0c64' => __DIR__ . '/..' . '/elbiniou-phi/source/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phi\\Traits\\' => 11,
            'Phi\\Routing\\' => 12,
            'Phi\\Interfaces\\' => 15,
            'Phi\\HTTP\\' => 9,
            'Phi\\' => 4,
            'PHPComponent\\' => 13,
        ),
        'G' => 
        array (
            'Guttentag\\Application\\' => 22,
            'Guttentag\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phi\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/phi-traits/source/class/Traits',
        ),
        'Phi\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/phi-routing/source/class/Routing',
        ),
        'Phi\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/..' . '/elbiniou-phi/source/Interfaces',
        ),
        'Phi\\HTTP\\' => 
        array (
            0 => __DIR__ . '/..' . '/phi-http/source/class/HTTP',
        ),
        'Phi\\' => 
        array (
            0 => __DIR__ . '/..' . '/elbiniou-phi/source/class',
        ),
        'PHPComponent\\' => 
        array (
            0 => __DIR__ . '/..' . '/elbiniou-phpcomponent/source/class',
        ),
        'Guttentag\\Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Guttentag\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source/class',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/elbiniou-phpcomponent/vendor/mustache/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit266694db4199de57346fc73b9b3435da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit266694db4199de57346fc73b9b3435da::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit266694db4199de57346fc73b9b3435da::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
