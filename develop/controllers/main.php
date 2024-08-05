<?php
namespace Develop\Controllers;

use Core\Classes\Controller;

class Main extends Controller
{
    public function index() : void
    {
        $this->view('main/main', 'main');
    }

    public function blog() : void
    {
        $this->view('main/blog', 'main');
    }

    public function portfolio() : void
    {
        $this->view('main/portfolio', 'main');
    }

    public function certificates() : void
    {
        $this->view('main/certificates', 'main');
    }
}