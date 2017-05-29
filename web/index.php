<?php

namespace MiniSymfony\web;

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$request = Request::createFromGlobals();

$kernel = new \AppKernel('dev', true);
Debug::enable();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
