<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit57188ed3ea52a6e20c4a7f06166e29df
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit57188ed3ea52a6e20c4a7f06166e29df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit57188ed3ea52a6e20c4a7f06166e29df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit57188ed3ea52a6e20c4a7f06166e29df::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
