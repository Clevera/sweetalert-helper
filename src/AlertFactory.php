<?php

namespace Clevera\SweetAlert;

use Clevera\SweetAlert\Contract\SessionInterface;

class AlertFactory
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function success($text, $title = "Fantastic news")
    {
        return new SweetAlert($this->session, $title, $text, Type::success());
    }

    public function warning($text, $title = "Hold up")
    {
        return new SweetAlert($this->session, $title, $text, Type::warning());
    }

    public function info($text, $title = "Some info for you")
    {
        return new SweetAlert($this->session, $title, $text, Type::info());
    }

    public function error($text, $title = "Something went wrong")
    {
        return new SweetAlert($this->session, $title, $text, Type::error());
    }
}
