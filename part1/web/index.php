<?php

use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new HttpKernel(new EventDispatcher(), new ControllerResolver());

$request = Request::createFromGlobals();

try {
    $response = $kernel->handle($request);
}catch (NotFoundHttpException $e) {
    $response = Response::create($e->getMessage(), Response::HTTP_NOT_FOUND);
}

$response->send();

$kernel->terminate($request, $response);