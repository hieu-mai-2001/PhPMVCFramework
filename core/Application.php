<?php

namespace core;

require_once 'Request.php';
require_once 'Router.php';
require_once 'Response.php';
require_once 'Controller.php';

use core\Request;
use core\Response;
use core\Router;
use core\Controller;

class Application
{
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->controller = new Controller();
        $this->router = new Router($this->request, $this->response);
    }

    public function getLayout(){
        return $this->controller->layout;
    }

    public function setLayout($layout){
        $this->controller->setLayout($layout);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
