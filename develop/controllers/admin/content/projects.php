<?php

namespace Develop\Controllers\Admin\content;

use Core\Classes\Controller;

class Projects extends Controller
{
    public function list()
    {
        $this->view('admin/content/projects/list', 'admin');
    }
}