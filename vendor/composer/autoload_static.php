<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb0552e29e4049301f02157fba093327
{
    public static $files = array (
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webimpress\\SafeWriter\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PhpParser\\' => 10,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\View\\' => 13,
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\SkeletonInstaller\\' => 26,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Router\\' => 15,
            'Laminas\\Mvc\\' => 12,
            'Laminas\\ModuleManager\\' => 22,
            'Laminas\\Loader\\' => 15,
            'Laminas\\Json\\' => 13,
            'Laminas\\Http\\' => 13,
            'Laminas\\EventManager\\' => 21,
            'Laminas\\Escaper\\' => 16,
            'Laminas\\DevelopmentMode\\' => 24,
            'Laminas\\Config\\' => 15,
            'Laminas\\ComponentInstaller\\' => 27,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'B' => 
        array (
            'Brick\\VarExporter\\' => 18,
        ),
        'A' => 
        array (
            'Application\\' => 12,
            'ApplicationTest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webimpress\\SafeWriter\\' => 
        array (
            0 => __DIR__ . '/..' . '/webimpress/safe-writer/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-view/src',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\SkeletonInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-skeleton-installer/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-router/src',
        ),
        'Laminas\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-mvc/src',
        ),
        'Laminas\\ModuleManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-modulemanager/src',
        ),
        'Laminas\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-loader/src',
        ),
        'Laminas\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-json/src',
        ),
        'Laminas\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-http/src',
        ),
        'Laminas\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-eventmanager/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Laminas\\DevelopmentMode\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-development-mode/src',
        ),
        'Laminas\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-config/src',
        ),
        'Laminas\\ComponentInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-component-installer/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Brick\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/varexporter/src',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/src',
        ),
        'ApplicationTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/test',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb0552e29e4049301f02157fba093327::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb0552e29e4049301f02157fba093327::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb0552e29e4049301f02157fba093327::$classMap;

        }, null, ClassLoader::class);
    }
}
