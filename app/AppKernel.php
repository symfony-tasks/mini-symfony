<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    protected function buildContainer()
    {
        $container = parent::buildContainer();
        $container->register('dispatcher', EventDispatcher::class);
        $container->register('resolver', ControllerResolver::class);
        $container->register('http_kernel', HttpKernel::class)->addArgument(new Reference('dispatcher'))->addArgument(new Reference('resolver'));
        return $container;
    }

    public function registerBundles()
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}
