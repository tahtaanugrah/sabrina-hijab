<?php

namespace App\Controllers;

use App\Models\LoginModel;



class Login extends BaseController
{
    protected $Model_Auth;

    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new LoginModel();
    }


    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !'
                ]
            ],
        ])) {
            // jika valid
            $email = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($email, $password);
            if ($cek) {
                //jika cocok
                session()->set('log', true);
                session()->set('id', $cek['id_admin']);
                session()->set('name', $cek['username']);
                session()->set('password', $cek['password']);
                //percabangan admin & user
                return redirect()->to(base_url('kelola_home'));
            } else {
                //jika email dan password tidak valid
                session()->setFlashdata('pesanlogin', 'Username atau password salah');
                return redirect()->to(base_url('/login'));
            }
        } else {
            // jika tidak valid
            session()->setFlashdata('errorslogin', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
