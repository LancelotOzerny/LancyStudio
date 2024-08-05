<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;

class User extends Controller
{
    public function list() : void
    {
        $this->view('admin/settings/user/list', 'admin');
    }
}