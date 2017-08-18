<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'POMO\\' => 5,
        ),
        'M' => 
        array (
            'MaxMind\\WebService\\' => 19,
            'MaxMind\\Exception\\' => 18,
            'MaxMind\\Db\\' => 11,
        ),
        'G' => 
        array (
            'GeoIp2\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Aura\\Sql\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'POMO\\' => 
        array (
            0 => __DIR__ . '/..' . '/pomo/pomo/src',
        ),
        'MaxMind\\WebService\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService',
        ),
        'MaxMind\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception',
        ),
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'GeoIp2\\' => 
        array (
            0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Aura\\Sql\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sql/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
        'O' => 
        array (
            'Ozh\\Phpass\\' => 
            array (
                0 => __DIR__ . '/..' . '/ozh/phpass/src',
            ),
            'Ozh\\Bookmarkletgen\\' => 
            array (
                0 => __DIR__ . '/..' . '/ozh/bookmarkletgen/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2d6d15a8f6cc4bfbfd4a2943a6c4df59::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
