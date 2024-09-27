<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function createUser()
    {
        $model = new UserModel();
        $data = [
            'login' => $this->request->getPost('login'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $model->insert($data);
        return redirect()->to('/login');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $user = $model->where('login', $login)->first();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            return redirect()->to('/atividades');
        }

        return redirect()->back()->with('error', 'Login failed');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
