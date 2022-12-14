<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc3437da08cd58a18dd6f99d85709f4a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc3437da08cd58a18dd6f99d85709f4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc3437da08cd58a18dd6f99d85709f4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc3437da08cd58a18dd6f99d85709f4a::$classMap;

        }, null, ClassLoader::class);
    }
}
