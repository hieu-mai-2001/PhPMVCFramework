<?php

namespace controllers;

use core\Controller;
use core\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isPost()) {
            return 'handle login submit data';
        }
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'handle register submit data';
        }

        return $this->render('register');
    }
}
