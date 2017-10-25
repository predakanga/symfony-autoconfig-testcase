<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function(ContainerConfigurator $c) {
    $s = $c->services();

    $s->defaults()->autowire(true)
        ->autoconfigure(true)
        ->private();

    $s->instanceof(\Symfony\Component\Console\Application::class)
        ->public();

    $s->load('Testcase\\', 'src/**');
};