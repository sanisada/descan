<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\data_model;
use App\Models\kec_model;
use App\Models\desa_model;

class Data extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->dataModel = new data_model();
        $this->desaModel = new desa_model();
        $this->kecamatanModel = new kec_model();
        $this->uri = new \CodeIgniter\HTTP\URI(str_replace(base_url(),'',current_url()));
        // $uri = current_url(true);
    }

    public function index(): string
    {
        $session = session();

        $data = array(
                'data' => $this->dataModel->findAll(),
                'pager' => $this->dataModel->pager
            );

        return view('templates/header')
            . view('templates/menu')
            . view('data/data_view', $data)
            . view('templates/footer');
    }

    public function detail()
    {
        return view('templates/header')
                . view('templates/menu')
                . view('data/detail_view')
                . view('templates/footer');
    }

    public function create($id)
    {
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/create', $data)
                . view('templates/footer');
    }

    public function tambah_data()
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        
        //insert data into database
        $dataModel->insert([
            'Tahun'   => $this->request->getPost('tahun'),
        ]);

        $data_id = $dataModel->getInsertID();

        //flash message
        session()->setFlashdata('message', 'Data Berhasil Disimpan');

        return redirect()->to(base_url('data/create/'.$data_id));
    }

    public function save($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($id, [
            'R101'   => 'Lampung',
            'R102'   => 'Pringsewu',
            'R103'   => $this->request->getPost('R103'),
            'R104' => $this->request->getPost('R104'),
            'R106A' => $this->request->getPost('R106A')
        ]);
        
        //flash message
        session()->setFlashdata('message', 'Data Berhasil Disimpan');

        return redirect()->to(base_url('data_podes'));
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
