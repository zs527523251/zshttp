<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22ef7e25d1fdcc343bee34e51fac454a
{
    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zshttp\\http\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zshttp\\http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22ef7e25d1fdcc343bee34e51fac454a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22ef7e25d1fdcc343bee34e51fac454a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
