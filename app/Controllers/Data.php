<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Data extends BaseController
{
    public function index(): string
    {
        $session = session();
        return view('templates/header')
            . view('templates/menu')
            . view('data/data_view')
            . view('templates/footer');
    }

    public function detail()
    {
        return view('templates/header')
                . view('templates/menu')
                . view('data/detail_view')
                . view('templates/footer');
    }

    public function create()
    {
        return view('templates/header')
                . view('templates/menu')
                . view('data/create')
                . view('templates/footer');
    }

    public function save()
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        
        //insert data into database
        $dataModel->insert([
            'user_username'   => $this->request->getPost('username'),
            'user_name' => $this->request->getPost('name'),
            'user_email' => $this->request->getPost('email'),
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_role' => $this->request->getPost('role')
        ]);

        //flash message
        session()->setFlashdata('message', 'Pengguna Berhasil Disimpan');

        return redirect()->to(base_url('pengaturan'));
    }

    /**
     * edit function
     */
    public function edit()
    {
        //model initialize
        // $dataModel = new user_model();

        // $data = array(
        //     'user' => $dataModel->find($user_id)
        // );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit')
                . view('templates/footer');
    }
}
