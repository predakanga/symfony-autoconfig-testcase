<?php

/**
 * @var \Symfony\Component\DependencyInjection\Loader\PhpFileLoader $this
 * @var \Symfony\Component\DependencyInjection\ContainerBuilder $container
 */

// Auto-configuration
$container->registerForAutoconfiguration(\Symfony\Component\Console\Application::class)
    ->setPublic(true);

// Default definition
$definition = new \Symfony\Component\DependencyInjection\Definition();
$definition->setAutowired(true)
    ->setAutoconfigured(true)
    ->setPublic(false);

$this->registerClasses($definition, 'Testcase\\', 'src/**');