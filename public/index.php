<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../core/Application.php';
require_once '../controllers/SiteController.php';
require_once '../controllers/AuthController.php';

use core\Application;
use controllers\SiteController;
use controllers\AuthController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
