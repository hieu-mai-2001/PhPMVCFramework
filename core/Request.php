<?php

namespace core;

class Request
{
    public function getPath()
    {
        return $_SERVER['PATH_INFO'] ?? '/';
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
