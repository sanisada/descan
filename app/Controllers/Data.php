<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\data_model;
use App\Models\kec_model;
use App\Models\desa_model;
use App\Models\ques_model;

class Data extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->dataModel = new data_model();
        $this->desaModel = new desa_model();
        $this->kecamatanModel = new kec_model();
        $this->quesModel = new ques_model();
        $this->uri = new \CodeIgniter\HTTP\URI(str_replace(base_url(),'',current_url()));
        // $uri = current_url(true);
    }

    public function index(): string
    {
        $session = session();

        $data = array(
                'datas' => $this->dataModel->getAll(),
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

    public function create($data_id)
    {
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($data_id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/create', $data)
                . view('templates/footer');
    }

    public function create2($data_id)
    {
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($data_id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/create2', $data)
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

    public function save1($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R101'   => 'Lampung',
            'R102'   => 'Pringsewu',
            'R103'   => $this->request->getPost('R103'),
            'R104' => $this->request->getPost('R104'),
            'R106A' => $this->request->getPost('R106A'),
            'R304'   => $this->request->getPost('R304'),
            'R307B1'   => $this->request->getPost('R307B1'),
            'R307B1_LAT' => $this->request->getPost('R307B1_LAT'),
            'R307B1_LA0' => $this->request->getPost('R307B1_LA0'),
            'R307B1_LON' => $this->request->getPost('R307B1_LON'),
            'R307B2' => $this->request->getPost('R307B2')
        ]);
        
        //flash message
        session()->setFlashdata('message', 'Data Berhasil Disimpan');

        return redirect()->to(base_url('data/create2/'.$data_id));
    }

    public function save2($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            
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

    public function delete($data_id)
    {

        $data = $this->dataModel->find($data_id);

        if($data) {
            $this->dataModel->delete($data_id);

            //flash message
            session()->setFlashdata('message', 'Data Berhasil Dihapus');

            return redirect()->to(base_url('data_podes'));
        }
    }
}
