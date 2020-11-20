<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0045cd06b642299880b685e50927cff1
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\' => 6,
        ),
        'T' => 
        array (
            'TransferFile\\' => 13,
        ),
        'D' => 
        array (
            'DomBuilder\\' => 11,
            'DataStructure\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Utils',
            1 => __DIR__ . '/..' . '/vsoft/intl-payment-xml/src/Utils',
        ),
        'TransferFile\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/TransferFile',
            1 => __DIR__ . '/..' . '/vsoft/intl-payment-xml/src/TransferFile',
        ),
        'DomBuilder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/DomBuilder',
            1 => __DIR__ . '/..' . '/vsoft/intl-payment-xml/src/DomBuilder',
        ),
        'DataStructure\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/DataStructure',
            1 => __DIR__ . '/..' . '/vsoft/intl-payment-xml/src/DataStructure',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0045cd06b642299880b685e50927cff1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0045cd06b642299880b685e50927cff1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0045cd06b642299880b685e50927cff1::$classMap;

        }, null, ClassLoader::class);
    }
}