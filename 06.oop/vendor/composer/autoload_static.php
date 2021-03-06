<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1083d943bc820250b25dda5fbd8e828
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dumb_bird\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dumb_bird\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1083d943bc820250b25dda5fbd8e828::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1083d943bc820250b25dda5fbd8e828::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
