<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7777c602358b5a72ebb4787da8485fdb
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'ThirtySix' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'M' => 
        array (
            'Model' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'Controller' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7777c602358b5a72ebb4787da8485fdb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
