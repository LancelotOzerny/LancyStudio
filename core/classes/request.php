<?php

namespace Core\Classes;

use Core\Traits\Singleton;

class Request
{
    use Singleton;

    private array $request = [];

    public function init()
    {
        $this->request = $_REQUEST;
    }

    public function getPost(string $fieldName)
    {
        return $this->request[$fieldName];
    }

    public function isPost(string $fieldName) : bool
    {
        if (isset($this->request[$fieldName]))
        {
            return true;
        }

        return false;
    }
}