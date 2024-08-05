<?php
namespace Develop\Controllers;

use Core\Classes\Controller;

class Page404 extends Controller
{
    public function index() : void
    {
        $this->view('404', 'main');
    }
}