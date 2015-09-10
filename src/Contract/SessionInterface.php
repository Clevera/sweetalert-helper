<?php

namespace Clevera\SweetAlert\Contract;

interface SessionInterface
{
    public function flash($name, $value);

    public function get($name, $default = null);

    public function set($name, $value);

    public function has($name);
}
