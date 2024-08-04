<?php
namespace Develop\Controllers;

use Core\Classes\Controller;

class Main extends Controller
{
    public function index() : void
    {
        $this->view('main');
    }
}