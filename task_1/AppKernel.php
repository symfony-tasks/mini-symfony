<?php

namespace task_1;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;

class AppKernel extends HttpKernel
{
    public function __construct()
    {
        $dispatcher = new EventDispatcher();
        $controllerResolver = new ControllerResolver();
        $argumentResolver = new ArgumentResolver();
        $requestStack = new RequestStack();
        parent::__construct($dispatcher, $controllerResolver, $requestStack,
            $argumentResolver);
    }
}