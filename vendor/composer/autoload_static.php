<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit406f9a42acc12a15ce2fcc15da77e8dd
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit406f9a42acc12a15ce2fcc15da77e8dd::$classMap;

        }, null, ClassLoader::class);
    }
}
