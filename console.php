<?php

use Symfony\Bundle\FrameworkBundle\Console\Application;

$loader = require __DIR__ . '/vendor/autoload.php';
$application = new Application(new AppKernel('dev', true));
$application->setDefaultCommand('server:run', true);
$application->run();
