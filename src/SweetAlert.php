<?php

namespace Clevera\SweetAlert;

use Clevera\SweetAlert\Contract\SessionInterface;

class SweetAlert
{
    private $session;
    private $title;
    private $text;
    private $type;

    public function __construct(SessionInterface $session, $title, $text, Type $type)
    {
        $this->session = $session;
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
    }

    public function flashAlert()
    {
        $this->session->flash('alert', [
            'title' => $this->title,
            'text' => $this->text,
            'type' => $this->type
        ]);
    }

    public function __toString()
    {
        return "
            swal({
                title: '{$this->title}',
                text: '{$this->text}',
                timer: 1500,
                type: '{$this->type}'
            });
        ";
    }
}
