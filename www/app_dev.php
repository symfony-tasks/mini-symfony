<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use MiniSymfony\AppKernel;

require_once __DIR__ . '/../vendor/autoload.php';

Debug::enable();

$kernel = new AppKernel('dev', true);

$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
