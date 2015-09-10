<?php

namespace Clevera\SweetAlert\Adapter;

use Clevera\SweetAlert\Contract\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class SymfonySessionAdapter implements SessionInterface
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function flash($name, $value)
    {
        $this->session->getFlashBag()->set($name, $value);
    }

    public function get($name, $default = null)
    {
        return $this->session->getFlashBag()->get($name);
    }

    public function set($name, $value)
    {
        $this->session->set($name, $value);
    }

    public function has($name)
    {
        return $this->session->has($name);
    }


}
