<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;
use AppKernel;

$kernel = new \AppKernel('dev', true);

$application = new Application($kernel);
$application->setDefaultCommand('server:run', true);
$application->run();
