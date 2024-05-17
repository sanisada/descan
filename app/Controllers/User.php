<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\user_model;

class User extends BaseController
{
    public function __construct()
    {

    }
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $userModel = new user_model();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'users' => $userModel->paginate(10, 'user'),
            'pager' => $userModel->pager
        );

        return view('templates/header')
                . view('templates/menu')
                . view('users/user_view', $data)
                . view('templates/footer');
    }

    public function create()
    {
        return view('templates/header')
                . view('templates/menu')
                . view('users/create')
                . view('templates/footer');
    }

    public function save()
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        // $validation = $this->validate([
        //     'name' => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan Nama Pengguna.'
        //         ]
        //     ],
        //     'username'    => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan Username Pengguna.'
        //         ]
        //     ],
        // ]);

        // if(!$validation) {

        //     //render view with error validation message
        //     return view('post-create', [
        //         'validation' => $this->validator
        //     ]);

        // } else {

            //model initialize
            $userModel = new user_model();
            // $userModel->protect(false);
            
            //insert data into database
            $userModel->insert([
                'user_username'   => $this->request->getPost('username'),
                'user_name' => $this->request->getPost('name'),
                'user_email' => $this->request->getPost('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_role' => $this->request->getPost('role')
            ]);

            //flash message
            session()->setFlashdata('message', 'Pengguna Berhasil Disimpan');

            return redirect()->to(base_url('pengaturan'));
        // }

    }

    /**
     * edit function
     */
    public function edit($user_id)
    {
        //model initialize
        $userModel = new user_model();

        $data = array(
            'user' => $userModel->find($user_id)
        );

        return view('templates/header')
                . view('templates/menu')
                . view('users/edit', $data)
                . view('templates/footer');
    }

    /**
     * update function
     */
    public function update($user_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        // $validation = $this->validate([
        //     'title' => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan Judul Post.'
        //         ]
        //     ],
        //     'content'    => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan konten Post.'
        //         ]
        //     ],
        // ]);

        // if(!$validation) {

        //     //model initialize
        //     $postModel = new PostModel();

        //     //render view with error validation message
        //     return view('post-edit', [
        //         'post' => $postModel->find($id),
        //         'validation' => $this->validator
        //     ]);

        // } else {

            //model initialize
            $userModel = new user_model();
            
            //insert data into database
            $userModel->update($user_id, [
                'user_username'   => $this->request->getPost('username'),
                'user_name' => $this->request->getPost('name'),
                'user_email' => $this->request->getPost('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_role' => $this->request->getPost('role')
            ]);

            //flash message
            session()->setFlashdata('message', 'Pengguna Berhasil Diupdate');

            return redirect()->to(base_url('pengaturan'));
        // }

    }

    public function delete($user_id)
    {
        //model initialize
        $userModel = new user_model();

        $user = $userModel->find($user_id);

        if($user) {
            $userModel->delete($user_id);

            //flash message
            session()->setFlashdata('message', 'Pengguna Berhasil Dihapus');

            return redirect()->to(base_url('pengaturan'));
        }
    }
}