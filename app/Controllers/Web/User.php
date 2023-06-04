<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function create_user()
    {
        $userModel = new UserModel();

        $userModel->insert([
            'user' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $userModel->passwordHash('123456')
        ]);
    }

    public function login()
    {
        echo view('web/user/login');
    }

    public function login_post()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->select('id,user,email,password,type')
                          ->orWhere('email', $email)
                          ->orWhere('user', $email)
                          ->first();

        if (!$user) {
            return redirect()->back()->with('message', '帳號或密碼錯誤');        
        }
        
        if ($userModel->passwordVerify($password, $user->password)) {

            // 密碼只用於驗證，驗證通過後不保留密碼欄位。
            unset($user->password);
            session()->set('user', $user);

            return redirect()->to('/dashboard/category')->with('message', "歡迎 $user->user");
        }

        return redirect()->back()->with('message', '帳號或密碼錯誤');  
    }

    public function register()
    {
        echo view('web/user/register');
    }

    public function register_post()
    {
        $userModel = new UserModel();

        if ($this->validate('users')) {
            $userModel->insert([
                'user' => $this->request->getPost('user'),
                'email' => $this->request->getPost('email'),
                'password' => $userModel->passwordHash($this->request->getPost('password')),
            ]);

            return redirect()->to(route_to('user.login'))->with('message', "註冊成功");
        }     
        
        // 驗證未通過
        session()->serFlashdata([
            'validation' => $this->validator
        ]);

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(route_to('user.login'));
    }
}
