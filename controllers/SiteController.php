<?php

namespace controllers;

require_once '../core/Application.php';
require_once '../core/Controller.php';

use core\Controller;
use core\Application;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'hieu',
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        return 'Handling submitted data posted';
    }
}
