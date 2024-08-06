<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;
use Develop\Models\Admin\Settings\User_Model;

class User extends Controller
{
    private User_Model | null $model;

    public function __construct()
    {
        $this->model = new User_Model();
    }

    public function list() : void
    {
        $data = [];
        $this->model->select(['users.id', 'users.login', 'users.email', 'rights.name']);
        $this->model->join('rights', 'users.rights_id', 'rights.id');
        $data['userList'] = $this->model->getAll();

        $this->view('admin/settings/user/list', 'admin', $data);
    }
}