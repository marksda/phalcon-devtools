<?php
use Phalcon\Autoload\Loader;

$loader = new Loader();

$loader->setDirectories(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();


/**
 * We're a registering a set of directories taken from the configuration file
 */
// $loader->registerDirs(
//     [
//         $config->application->controllersDir,
//         $config->application->modelsDir
//     ]
// )->register();
