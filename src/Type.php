<?php

namespace Clevera\SweetAlert;

class Type
{
    const WARNING = 0;
    const ERROR = 1;
    const SUCCESS = 2;
    const INFO = 3;

    protected $types = [
        'warning',
        'error',
        'success',
        'info'
    ];

    private $type;

    private function __construct($type)
    {
        $this->type = $this->types[$type];
    }

    public static function warning()
    {
        return new static(self::WARNING);
    }

    public static function error()
    {
        return new static(self::ERROR);
    }

    public static function success()
    {
        return new static(self::SUCCESS);
    }

    public static function info()
    {
        return new static(self::INFO);
    }

    public function __toString()
    {
        return $this->type;
    }
}
