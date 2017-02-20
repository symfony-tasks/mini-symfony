<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;

class AppKernel extends Kernel
{

    use MicroKernelTrait;

    public function registerBundles()
    {
        return [new FrameworkBundle()];
    }

    public function configureRoutes(RouteCollectionBuilder $routes)
    {
        
    }

    public function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $c->setParameter('kernel.secret', '12345');
    }

}
