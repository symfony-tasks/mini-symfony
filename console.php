<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;

$application = new Application(new AppKernel('dev', true));

$application->setDefaultCommand('server:run', true);

$application->run();
