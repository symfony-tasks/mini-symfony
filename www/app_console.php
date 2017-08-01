<?php

use \Symfony\Bundle\FrameworkBundle\Console\Application;
use \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand;
use \MiniSymfony\AppKernel;

require __DIR__.'/../vendor/autoload.php';

$kernel = new AppKernel('dev', true);

$serverRunCommand = new ServerRunCommand(null, 'dev');

$app = new Application($kernel);
$app->add($serverRunCommand);
$app->setDefaultCommand($serverRunCommand->getName(), true);
$app->run();
