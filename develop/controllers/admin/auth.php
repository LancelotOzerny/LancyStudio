<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;

class Auth extends Controller
{
    public function login()
    {
        $this->view('admin/login', 'admin');
    }
}