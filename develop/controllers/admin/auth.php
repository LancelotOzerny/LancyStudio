<?php

namespace Develop\Controllers\Admin;

use Core\Classes\Controller;
use Core\Classes\Request;
use Develop\Models\Admin\Settings\User_Model;

class Auth extends Controller
{
    public function auth()
    {
        $errors = [];

        if (Request::Instance()->isPost('user-login') === false)
        {
            $errors[] = 'Не указан логин';
        }
        if (Request::Instance()->isPost('user-password') === false)
        {
            $errors[] = 'Не указан пароль';
        }

        if (count($errors) > 0)
        {
            echo json_encode($errors);
            return;
        }

        $login = Request::Instance()->getPost('user-login');
        $password = Request::Instance()->getPost('user-password');

        $login = htmlspecialchars(trim($login));
        $password = htmlspecialchars(trim($password));

        $model = new User_Model();
        $model->select(['id', 'login', 'password']);
        $model->where(['login' => $login]);

        $userArr = $model->getFirst();
        if ($userArr !== false && count($userArr) > 0)
        {
            if (password_verify($password, $userArr['password']))
            {
                $_SESSION['current-user-id'] = $userArr['id'];
            }
            else
            {
                $errors[] = 'Неверный пароль!';
            }
        }
        else
        {
            $errors[] = 'Пользователь с таким логином не найден!';
        }

        echo json_encode($errors);
    }
    public function login()
    {
        $this->view('admin/login', 'admin');
    }
}