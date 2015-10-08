<?php
require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

//Turn off debugger to see in production
if(isset($_GET['production'])){
	$configurator->setDebugMode(FALSE);
}

$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
