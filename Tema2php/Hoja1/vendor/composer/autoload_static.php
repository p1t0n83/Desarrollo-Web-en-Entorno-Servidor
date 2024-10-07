<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc73f7577b3cc87c682c6b6f49ee27af
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hackzilla\\PasswordGenerator\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hackzilla\\PasswordGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/hackzilla/password-generator',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc73f7577b3cc87c682c6b6f49ee27af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc73f7577b3cc87c682c6b6f49ee27af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc73f7577b3cc87c682c6b6f49ee27af::$classMap;

        }, null, ClassLoader::class);
    }
}
