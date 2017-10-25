<?php

/**
 * @var \Symfony\Component\DependencyInjection\Loader\PhpFileLoader $this
 * @var \Symfony\Component\DependencyInjection\ContainerBuilder $container
 */

// Auto-configuration
use Symfony\Component\DependencyInjection\ChildDefinition;

// Default definition
$definition = new \Symfony\Component\DependencyInjection\Definition();
$definition->setAutowired(true)
    ->setAutoconfigured(true)
    ->setPublic(false)
    ->setInstanceofConditionals([\Symfony\Component\Console\Application::class => (new ChildDefinition(''))->setPublic(true)]);


$this->registerClasses($definition, 'Testcase\\', 'src/**');