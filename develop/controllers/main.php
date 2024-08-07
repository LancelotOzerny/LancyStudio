<?php
namespace Develop\Controllers;

use Core\Classes\Controller;
use Develop\Models\Admin\Content\Projects_Model;

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
        $data = [];

        $model = new Projects_Model();
        $model->select(['id', 'name', 'short_description', 'image_src']);
        $data['projectsList'] = $model->getAll();

        $this->view('main/portfolio', 'main', $data);
    }

    public function certificates() : void
    {
        $this->view('main/certificates', 'main');
    }
}