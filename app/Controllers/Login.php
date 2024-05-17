<?php

namespace App\Controllers;
use App\Models\user_model;

class Login extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }


        helper(['form']);
        echo view('login_view');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new user_model();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('user_username', $username)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
					'user_username' => $data['user_username'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
