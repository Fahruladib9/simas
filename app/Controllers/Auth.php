<?php

namespace App\Controllers;

use App\Models\Data_UserModel;
use App\Controllers\Setting;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->userModel = new Data_UserModel();
        $this->setting = new Setting();
    }

    public function index()
    {
        return view('login');
    }

    public function proses_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $this->userModel->cekLogin($username);
        if ($user && is_string($password) && password_verify($password, $user->password)) {
            $userData = [
                'id_user' => $user->id_user,
                'username' => $user->username,
                'password' => $user->password,
                'nama' => $user->nama,
            ];
            session()->set('user', $userData);
            $this->setting->allert('Sukses', 'Berhasil Login', 'success');
            return redirect()->to('/admin');
        } else {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->remove('user');
        return redirect()->to('/login');
    }
}
