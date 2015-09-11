<?php

namespace Clevera\SweetAlert;

use Illuminate\Support\Facades\Session;

class LaravelSessionAdapter implements SessionInterface
{
    public function flash($name, $value)
    {
        Session::flash($name, $value);
    }

    public function get($name, $default = null)
    {
        return Session::get($name);
    }

    public function set($name, $value)
    {
        Session::put($name, $value);
    }

    public function has($name)
    {
        return Session::has($name);
    }
}