<?php
namespace Develop\Controllers\Admin;

use Core\Classes\Controller;
use Develop\Models\Admin\Settings\Rights_Model;

class Rights extends Controller
{
    private Rights_Model | null $model = null;

    public function __construct()
    {
        $this->model = new Rights_Model();
    }

    public function list() : void
    {
        $this->model->select();
        $this->model->query();
        $data['rights'] = $this->model->getAll();


        $this->view('admin/settings/rights/list', 'admin', $data);
    }
}