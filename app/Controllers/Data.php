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
