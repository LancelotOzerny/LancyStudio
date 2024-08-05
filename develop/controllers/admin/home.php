<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->view('admin/main', 'admin');
    }
}