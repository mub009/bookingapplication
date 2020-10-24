<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c9f653afcdf28ab725f215ffad352a1
{
    public static $files = array (
        '45aa9999d4f6d0867d163901abfff6b6' => __DIR__ . '/..' . '/mcaskill/php-array-group-by/Function.Array-Group-By.php',
    );

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

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c9f653afcdf28ab725f215ffad352a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c9f653afcdf28ab725f215ffad352a1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9c9f653afcdf28ab725f215ffad352a1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}