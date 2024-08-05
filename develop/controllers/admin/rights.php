<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;

class Rights extends Controller
{
    public function list() : void
    {
        $this->view('admin/settings/rights/list', 'admin');
    }
}