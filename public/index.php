<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../core/Application.php';
require_once '../controllers/SiteController.php';

use core\Application;
use controllers\SiteController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->run();
