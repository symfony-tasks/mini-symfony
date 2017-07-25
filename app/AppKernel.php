<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\EventDispatcher\EventDispatcher;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
        ];

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }

    protected function prepareContainer(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        parent::prepareContainer($container);

        $container->register('event_dispatcher', EventDispatcher::class);
        $container->register('controller_resolver', ControllerResolver::class);
        $container->register('http_kernel', HttpKernel::class)->setArguments([
            new Reference('event_dispatcher'),
            new Reference('controller_resolver'),
        ]);
    }
}
