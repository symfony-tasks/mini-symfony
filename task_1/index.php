<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;

$loader = require __DIR__ . '/vendor/autoload.php';
Debug::enable();
require_once('AppKernel.php');

$kernel = new task_1\AppKernel();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);