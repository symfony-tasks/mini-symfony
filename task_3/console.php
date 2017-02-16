<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Bundle\WebServerBundle\Command\ServerRunCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new ServerRunCommand('.', 'dev'));
$application->setDefaultCommand('server:run');

$application->run();