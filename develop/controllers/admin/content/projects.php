<?php

namespace Develop\Controllers\Admin\content;

use Core\Classes\Controller;
use Develop\Models\Admin\Content\Projects_Model;

class Projects extends Controller
{
    public function list()
    {
        $data = [];

        $model = new Projects_Model();
        $model->select(['id', 'name', 'date', 'short_description', 'type']);

        $data['projectsList'] = $model->getAll();

        $this->view('admin/content/projects/list', 'admin', $data);
    }
}