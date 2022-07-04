<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3408fd17b7ec4c22b8910fa9cb2bb6a1
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

        spl_autoload_register(array('ComposerAutoloaderInit3408fd17b7ec4c22b8910fa9cb2bb6a1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3408fd17b7ec4c22b8910fa9cb2bb6a1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3408fd17b7ec4c22b8910fa9cb2bb6a1::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit3408fd17b7ec4c22b8910fa9cb2bb6a1::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire3408fd17b7ec4c22b8910fa9cb2bb6a1($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire3408fd17b7ec4c22b8910fa9cb2bb6a1($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
