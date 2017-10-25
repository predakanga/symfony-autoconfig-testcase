<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

require_once 'vendor/autoload.php';

$container = new ContainerBuilder();
$config = new PhpFileLoader($container, new FileLocator(__DIR__));
$config->load('di_config.php');
$container->compile();

if($container->has(\Testcase\ConsoleApplication::class)) {
    echo "SUCCESS: ConsoleApplication is public\n";
} else {
    echo "FAILURE: ConsoleApplication is not public\n";
}