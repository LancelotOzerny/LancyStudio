<?php
namespace  Core\Classes;

use Develop\Models\Admin\Settings\User_Model;

class User
{
    public int $rightsLevel = 0;
    public string $login = '';
    public string $email = '';
    public string $rightsName = '';
    public bool $isNull = true;

    public function __construct()
    {

    }

    public function loadById(int $id)
    {
        $model = new User_Model();
        $model->select(['users.id', 'users.login', 'users.email', 'rights.name', 'rights.level']);
        $model->join('rights', 'users.rights_id', 'rights.id');
        $model->where(['users.id' => $id]);

        $userArr = $model->getFirst();

        $this->login = $userArr['login'];
        $this->rightsLevel = $userArr['level'];
        $this->email = $userArr['email'];
        $this->rightsName = $userArr['name'];

        $this->isNull = false;
    }
}