<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpKernel\EventListener\ExceptionListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        return null;
    }

    protected function prepareContainer(ContainerBuilder $container)
    {
        parent::prepareContainer($container);

        $container->setDefinition('http_kernel', new Definition(HttpKernel::class, [
            new Reference('event_dispatcher'),
            new Reference('controller_resolver')
        ]));

        $container->setDefinition('event_dispatcher', new Definition(EventDispatcher::class));
        $container->setDefinition('controller_resolver', new Definition(ControllerResolver::class));
    }

    protected function initializeContainer()
    {
        parent::initializeContainer();

        $dispatcher = $this->container->get('event_dispatcher');
        
        $dispatcher->addSubscriber(new ExceptionListener(function (FlattenException $exception) {
            $msg = sprintf('Error %d: "%s"', $exception->getStatusCode(), $exception->getMessage());
            return new Response($msg, $exception->getStatusCode());
        }));
    }

}
