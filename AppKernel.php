<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * Returns an array of bundles to register.
     *
     * @return BundleInterface[] An array of bundle instances
     */
    public function registerBundles(): array
    {
        return [];
    }

    /**
     * Loads the container configuration.
     *
     * @param LoaderInterface $loader A LoaderInterface instance
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {

    }

    protected function prepareContainer(ContainerBuilder $container)
    {
        $container->register('http_kernel', HttpKernel::class)->setPublic(true)
            ->setArguments([
                $container->register(EventDispatcher::class),
                $container->register(ControllerResolver::class)
            ]);

        parent::prepareContainer($container);
    }

}
