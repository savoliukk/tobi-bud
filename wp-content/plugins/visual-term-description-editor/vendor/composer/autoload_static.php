<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd58f7f79ba7e21ca8a343697a3ea0653
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'VTDE\\Editor' => __DIR__ . '/../..' . '/php/class-editor.php',
        'VTDE\\Plugin' => __DIR__ . '/../..' . '/php/class-plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd58f7f79ba7e21ca8a343697a3ea0653::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd58f7f79ba7e21ca8a343697a3ea0653::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd58f7f79ba7e21ca8a343697a3ea0653::$classMap;

        }, null, ClassLoader::class);
    }
}
