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
    
        if ($model->insert($data)) {
            session()->setFlashdata('success', 'Usuário cadastrado com sucesso!');
            return redirect()->to('/login');
        } else {
            session()->setFlashdata('error', 'Erro ao cadastrar usuário.');
        }

    
    }


    

    public function authenticate()
    {   
        $model = new UserModel();
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('senha');

        $user = $model->where('login', $login)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            log_message('info', 'User authenticated, redirecting to atividades.');
            return redirect()->to('/atividades'); // Certifique-se que esta rota esteja correta
        }

        log_message('error', 'Login failed for user: ' . $login);
        return redirect()->back()->with('error', 'Login failed');
    }



    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function register() {
        return view('usuarios/register');  // Nome da view do formulário de registro
    }
    

}