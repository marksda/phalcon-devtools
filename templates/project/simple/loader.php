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
