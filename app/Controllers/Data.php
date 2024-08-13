<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\data_model;
use App\Models\kec_model;
use App\Models\desa_model;
use App\Models\ques_model;
use App\Models\sls_model;
use App\Models\user_model;

class Data extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->dataModel = new data_model();
        $this->desaModel = new desa_model();
        $this->kecamatanModel = new kec_model();
        $this->quesModel = new ques_model();
        $this->slsModel = new sls_model();
        $this->uri = new \CodeIgniter\HTTP\URI(str_replace(base_url(),'',current_url()));
        // $uri = current_url(true);
    }

    public function index(): string
    {
        $session = session();
        $user_id = $session->get('user_id');

        // Dapatkan peran pengguna
        $userModel = new user_model();
        $user = $userModel->getRole($user_id);
        $role = $user['user_role'];

        $desaModel = new desa_model();
        $data['desa_options'] = $desaModel->getDesaByUserId($user_id);

        // Dapatkan desa_id dari desa_options jika ada, jika tidak maka null
        $desa_id = !empty($data['desa_options']) ? $data['desa_options'][0]['kode_desa'] : null;

        $dataModel = new data_model();
        
        // Jika admin, ambil semua data, jika tidak ambil data berdasarkan desa
        if ($role == 'Admin') {
            $data['datas'] = $dataModel->getAll();
        } else {
            $data['datas'] = $dataModel->getDataByDesa($desa_id);
        }

        $data['pager'] = $dataModel->pager;

        return view('templates/header')
            . view('templates/menu')
            . view('data/data_view', $data)
            . view('templates/footer');
    }

    public function getDesa()
    {
        // Load model
        $locationModel = new desa_model();

        // Get desa by kecamatan
        $kode_kec = $this->request->getPost('kode_kec');
        $desa = $locationModel->getDesaByKecamatan($kode_kec);

        // Return JSON response
        return $this->response->setJSON($desa);;
    }

    public function getDataByDesa($desa_id)
    {
        $model = new data_model(); // Ganti dengan model yang sesuai untuk mengambil data
        $data = $model->where('desa_id', $desa_id)->findAll();

        return $this->response->setJSON($data);
    }

    public function detail($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail', $data)
                . view('templates/footer');
    }

    public function detail2($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail2', $data)
                . view('templates/footer');
    }

    public function detail3($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail3', $data)
                . view('templates/footer');
    }

    public function detail4($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail4', $data)
                . view('templates/footer');
    }

    public function detail5($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail5', $data)
                . view('templates/footer');
    }

    public function detail6($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail6', $data)
                . view('templates/footer');
    }

    public function detail7($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail7', $data)
                . view('templates/footer');
    }

    public function detail8($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail8', $data)
                . view('templates/footer');
    }

    public function detail9($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail9', $data)
                . view('templates/footer');
    }

    public function detail10($id)
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/detail/detail10', $data)
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
            'sls' => $this->slsModel->getSlsByDesaId($data_id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/create/create', $data)
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
                . view('data/create/create2', $data)
                . view('templates/footer');
    }

    public function create3($data_id)
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
                . view('data/create/create3', $data)
                . view('templates/footer');
    }

    public function create4($data_id)
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
                . view('data/create/create4', $data)
                . view('templates/footer');
    }

    public function create5($data_id)
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
                . view('data/create/create5', $data)
                . view('templates/footer');
    }

    public function create6($data_id)
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
                . view('data/create/create6', $data)
                . view('templates/footer');
    }

    public function create7($data_id)
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
                . view('data/create/create7', $data)
                . view('templates/footer');
    }

    public function create8($data_id)
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
                . view('data/create/create8', $data)
                . view('templates/footer');
    }

    public function create9($data_id)
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
                . view('data/create/create9', $data)
                . view('templates/footer');
    }

    public function create10($data_id)
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
                . view('data/create/create10', $data)
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
        // Load model
        $dataModel = new data_model();

        // // Load Form Validation Library
        // $validation = \Config\Services::validation();

        // // Set validation rules
        // $validation->setRules([
        //     'R103' => 'required',
        //     'R104' => 'required',
        //     'R105' => 'required',
        //     'R201' => 'required',
        //     'R202' => 'required',
        //     'R203B1_LAT' => 'required',
        //     'R203B1_LA0' => 'required',
        //     'R203B1_LON' => 'required',
        //     'R203B2' => 'required'
        // ]);

        // // Run validation
        // if (!$validation->withRequest($this->request)->run()) {
        //     // Validation failed, load the form again with validation errors
        //     return view('your_form_view', [
        //         'validation' => $validation
        //     ]);
        // }

        // Validation passed, proceed to update data in the database
        $requestData = $this->request->getPost();
        $dataModel->update($data_id, [
            'R101'   => 'Lampung',
            'R102'   => 'Pringsewu',
            'R103'   => $requestData['R103'],
            'R104' => $requestData['R104'],
            'R105' => $requestData['R105'],
            'R202'   => $requestData['R202'],
            // 'R203B1'   => $requestData['R203B1'],
            'R203B1_LAT' => $requestData['R203B1_LAT'],
            'R203B1_LA0' => $requestData['R203B1_LA0'],
            'R203B1_LON' => $requestData['R203B1_LON'],
            'R203B2' => $requestData['R203B2']
        ]);

        // Initialize SLS model
        $slsModel = new sls_model();

        // Save new SLS data
        if (!empty($requestData['new_sls'])) {
            foreach ($requestData['new_sls'] as $newSls) {
                $slsModel->save([
                    'data_id' => $data_id,
                    'kode_desa' => $requestData['R104'],
                    'kode_sls' => $newSls['kode_sls'],
                    'nama_sls' => $newSls['nama_sls']
                ]);
            }
        }

        // Update existing SLS data
        if (!empty($requestData['sls'])) {
            foreach ($requestData['sls'] as $slsData) {
                $slsModel->update($slsData['sls_id'], [
                    'kode_sls' => $slsData['kode_sls'],
                    'nama_sls' => $slsData['nama_sls']
                ]);
            }
        }

        // Redirect to the next page
        return redirect()->to(base_url('data/create2/' . $data_id));
    }

    public function deleteSls($id, $data_id)
    {
        $slsModel = new sls_model();
        // Validate that the SLS belongs to the data ID
        $sls = $slsModel->where('data_id', $data_id)->find($id);
        if ($sls) {
            $slsModel->delete($id);
        }
        return redirect()->to(base_url('data/create/'.$data_id));
    }


    public function save2($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();

        //insert data into database
        $dataModel->update($data_id, [
            'R301'   => $this->request->getPost('R301'),
            'R301A'   => $this->request->getPost('R301A'),
            'R301B'   => $this->request->getPost('R301B'),
            'R301C'   => $this->request->getPost('R301C'),
            'R301D'   => $this->request->getPost('R301D'),
            'R302A'   => $this->request->getPost('R302A'),
            'R302A1'   => $this->request->getPost('R302A1'),
            'R302A2'   => $this->request->getPost('R302A2'),
            'R302B'   => $this->request->getPost('R302B'),
            'R302B1'   => $this->request->getPost('R302B1'),
            'R302B2'   => $this->request->getPost('R302B2'),
            'R303'   => $this->request->getPost('R303'),
            'R303A'   => $this->request->getPost('R303A'),
            'R303B'   => $this->request->getPost('R303B'),
            'R303C'   => $this->request->getPost('R303C'),
            'R303D'   => $this->request->getPost('R303D'),
            'R303E'   => $this->request->getPost('R303E'),
            'R303F'   => $this->request->getPost('R303F'),
            'R303G'   => $this->request->getPost('R303G'),
            'R303H'   => $this->request->getPost('R303H'),
            'R303I'   => $this->request->getPost('R303I'),
            'R303J'   => $this->request->getPost('R303J'),
            'R303K'   => $this->request->getPost('R303K'),
            'R303L'   => $this->request->getPost('R303L'),
            'R303M'   => $this->request->getPost('R303M'),
            'R303N'   => $this->request->getPost('R303N'),
            'R303O'   => $this->request->getPost('R303O'),
            'R303P'   => $this->request->getPost('R303P'),
            'R303Q'   => $this->request->getPost('R303Q'),
            'R303R'   => $this->request->getPost('R303R'),
            'R303S'   => $this->request->getPost('R303S'),
            'R303T'   => $this->request->getPost('R303T'),
            'R303U'   => $this->request->getPost('R303U'),
            'R304A'   => $this->request->getPost('R304A'),
            'R304B'   => $this->request->getPost('R304B')
        ]);

        return redirect()->to(base_url('data/create3/'.$data_id));
    }

    public function save3($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R401A1'   => $this->request->getPost('R401A1'),
            'R401A2'   => $this->request->getPost('R401A2'),
            'R401B'   => $this->request->getPost('R401B'),
            'R402'   => $this->request->getPost('R402'),
            'R402S'   => $this->request->getPost('R402S'),
            'R403A'   => $this->request->getPost('R403A'),
            'R403B'   => $this->request->getPost('R403B'),
            'R403C1'   => $this->request->getPost('R403C1'),
            'R403C1A'   => $this->request->getPost('R403C1A'),
            'R403C2'   => $this->request->getPost('R403C2'),
            'R403C3'   => $this->request->getPost('R403C3'),
            'R404AK2'   => $this->request->getPost('R404AK2'),
            'R404AK3'   => $this->request->getPost('R404AK3'),
            'R404AK4'   => $this->request->getPost('R404AK4'),
            'R404AK5'   => $this->request->getPost('R404AK5'),
            'R404B1K2'   => $this->request->getPost('R404B1K2'),
            'R404B1K3'   => $this->request->getPost('R404B1K3'),
            'R404B1K4'   => $this->request->getPost('R404B1K4'),
            'R404B1K5'   => $this->request->getPost('R404B1K5'),
            'R404B2K2'   => $this->request->getPost('R404B2K2'),
            'R404B2K3'   => $this->request->getPost('R404B2K3'),
            'R404B2K4'   => $this->request->getPost('R404B2K4'),
            'R404B2K5'   => $this->request->getPost('R404B2K5'),
            'R404B3K2'   => $this->request->getPost('R404B3K2'),
            'R404B3K3'   => $this->request->getPost('R404B3K3'),
            'R404B3K4'   => $this->request->getPost('R404B3K4'),
            'R404B3K5'   => $this->request->getPost('R404B3K5'),
            'R404B4K2'   => $this->request->getPost('R404B4K2'),
            'R404B4K3'   => $this->request->getPost('R404B4K3'),
            'R404B4K4'   => $this->request->getPost('R404B4K4'),
            'R404B4K5'   => $this->request->getPost('R404B4K5'),
            'R404B5K2'   => $this->request->getPost('R404B5K2'),
            'R404B5K3'   => $this->request->getPost('R404B5K3'),
            'R404B5K4'   => $this->request->getPost('R404B5K4'),
            'R404B5K5'   => $this->request->getPost('R404B5K5'),
            'R404B6K2'   => $this->request->getPost('R404B6K2'),
            'R404B6K3'   => $this->request->getPost('R404B6K3'),
            'R404B6K4'   => $this->request->getPost('R404B6K4'),
            'R404B6K5'   => $this->request->getPost('R404B6K5'),
            'R404B7K2'   => $this->request->getPost('R404B7K2'),
            'R404B7K3'   => $this->request->getPost('R404B7K3'),
            'R404B7K4'   => $this->request->getPost('R404B7K4'),
            'R404B7K5'   => $this->request->getPost('R404B7K5'),
            'R404B8K2'   => $this->request->getPost('R404B8K2'),
            'R404B8K3'   => $this->request->getPost('R404B8K3'),
            'R404B8K4'   => $this->request->getPost('R404B8K4'),
            'R404B8K5'   => $this->request->getPost('R404B8K5'),
            'R404B9K2'   => $this->request->getPost('R404B9K2'),
            'R404B9K3'   => $this->request->getPost('R404B9K3'),
            'R404B9K4'   => $this->request->getPost('R404B9K4'),
            'R404B9K5'   => $this->request->getPost('R404B9K5'),
            'R404B10K2'   => $this->request->getPost('R404B10K2'),
            'R404B10K3'   => $this->request->getPost('R404B10K3'),
            'R404B10K4'   => $this->request->getPost('R404B10K4'),
            'R404B10K5'   => $this->request->getPost('R404B10K5'),
            'R405A'   => $this->request->getPost('R405A'),
            'R405B1'   => $this->request->getPost('R405B1'),
            'R405B2'   => $this->request->getPost('R405B2'),
            'R405B3'   => $this->request->getPost('R405B3'),
            'R406A'   => $this->request->getPost('R406A'),
            'R406B1'   => $this->request->getPost('R406B1'),
            'R406B2'   => $this->request->getPost('R406B2'),
            'R406B3'   => $this->request->getPost('R406B3'),
            'R407'   => $this->request->getPost('R407'),
            'R407S'   => $this->request->getPost('R407S'),
            'R408'   => $this->request->getPost('R408'),
            'R408A'   => $this->request->getPost('R408A')
        ]);

        return redirect()->to(base_url('data/create4/'.$data_id));
    }

    public function save4($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();

        $R501AK5   = $this->request->getPost('R501AK5');
        $R501AK8   = $this->request->getPost('R501AK8');
        $R501BK5   = $this->request->getPost('R501BK5');
        $R501BK8   = $this->request->getPost('R501BK8');
        $R501CK5   = $this->request->getPost('R501CK5');
        $R501CK8   = $this->request->getPost('R501CK8');
        $R501DK5   = $this->request->getPost('R501DK5');
        $R501DK8   = $this->request->getPost('R501DK8');
        $R501EK5   = $this->request->getPost('R501EK5');
        $R501EK8   = $this->request->getPost('R501EK8');
        $R501FK5   = $this->request->getPost('R501FK5');
        $R501FK8   = $this->request->getPost('R501FK8');
        $R501GK5   = $this->request->getPost('R501GK5');
        $R501GK8   = $this->request->getPost('R501GK8');
        $R501HK5   = $this->request->getPost('R501HK5');
        $R501HK8   = $this->request->getPost('R501HK8');
        $R501IK5   = $this->request->getPost('R501IK5');
        $R501IK8   = $this->request->getPost('R501IK8');
        $R501JK5   = $this->request->getPost('R501JK5');
        $R501JK8   = $this->request->getPost('R501JK8');
        $R501KK5   = $this->request->getPost('R501KK5');
        $R501KK8   = $this->request->getPost('R501KK8');

        // Ubah array menjadi string
        $R501AK5_str = is_array($R501AK5) ? implode(',', $R501AK5) : '';
        $R501AK8_str = is_array($R501AK8) ? implode(',', $R501AK8) : '';
        $R501BK5_str = is_array($R501BK5) ? implode(',', $R501BK5) : '';
        $R501BK8_str = is_array($R501BK8) ? implode(',', $R501BK8) : '';
        $R501CK5_str = is_array($R501CK5) ? implode(',', $R501CK5) : '';
        $R501CK8_str = is_array($R501CK8) ? implode(',', $R501CK8) : '';
        $R501DK5_str = is_array($R501DK5) ? implode(',', $R501DK5) : '';
        $R501DK8_str = is_array($R501DK8) ? implode(',', $R501DK8) : '';
        $R501EK5_str = is_array($R501EK5) ? implode(',', $R501EK5) : '';
        $R501EK8_str = is_array($R501EK8) ? implode(',', $R501EK8) : '';
        $R501FK5_str = is_array($R501FK5) ? implode(',', $R501FK5) : '';
        $R501FK8_str = is_array($R501FK8) ? implode(',', $R501FK8) : '';
        $R501GK5_str = is_array($R501GK5) ? implode(',', $R501GK5) : '';
        $R501GK8_str = is_array($R501GK8) ? implode(',', $R501GK8) : '';
        $R501HK5_str = is_array($R501HK5) ? implode(',', $R501HK5) : '';
        $R501HK8_str = is_array($R501HK8) ? implode(',', $R501HK8) : '';
        $R501IK5_str = is_array($R501IK5) ? implode(',', $R501IK5) : '';
        $R501IK8_str = is_array($R501IK8) ? implode(',', $R501IK8) : '';
        $R501JK5_str = is_array($R501JK5) ? implode(',', $R501JK5) : '';
        $R501JK8_str = is_array($R501JK8) ? implode(',', $R501JK8) : '';
        $R501KK5_str = is_array($R501KK5) ? implode(',', $R501KK5) : '';
        $R501KK8_str = is_array($R501KK8) ? implode(',', $R501KK8) : '';


        //insert data into database
        $dataModel->update($data_id, [
            'R501AK2'   => $this->request->getPost('R501AK2'),
            'R501AK3'   => $this->request->getPost('R501AK3'),
            'R501AK4'   => $this->request->getPost('R501AK4'),
            'R501AK6'   => $this->request->getPost('R501AK6'),
            'R501AK7'   => $this->request->getPost('R501AK7'),
            'R501BK2'   => $this->request->getPost('R501BK2'),
            'R501BK3'   => $this->request->getPost('R501BK3'),
            'R501BK4'   => $this->request->getPost('R501BK4'),
            'R501BK6'   => $this->request->getPost('R501BK6'),
            'R501BK7'   => $this->request->getPost('R501BK7'),
            'R501CK2'   => $this->request->getPost('R501CK2'),
            'R501CK3'   => $this->request->getPost('R501CK3'),
            'R501CK4'   => $this->request->getPost('R501CK4'),
            'R501CK6'   => $this->request->getPost('R501CK6'),
            'R501CK7'   => $this->request->getPost('R501CK7'),
            'R501DK2'   => $this->request->getPost('R501DK2'),
            'R501DK3'   => $this->request->getPost('R501DK3'),
            'R501DK4'   => $this->request->getPost('R501DK4'),
            'R501DK6'   => $this->request->getPost('R501DK6'),
            'R501DK7'   => $this->request->getPost('R501DK7'),
            'R501EK2'   => $this->request->getPost('R501EK2'),
            'R501EK3'   => $this->request->getPost('R501EK3'),
            'R501EK4'   => $this->request->getPost('R501EK4'),
            'R501EK6'   => $this->request->getPost('R501EK6'),
            'R501EK7'   => $this->request->getPost('R501EK7'),
            'R501FK2'   => $this->request->getPost('R501FK2'),
            'R501FK3'   => $this->request->getPost('R501FK3'),
            'R501FK4'   => $this->request->getPost('R501FK4'),
            'R501FK6'   => $this->request->getPost('R501FK6'),
            'R501FK7'   => $this->request->getPost('R501FK7'),
            'R501GK2'   => $this->request->getPost('R501GK2'),
            'R501GK3'   => $this->request->getPost('R501GK3'),
            'R501GK4'   => $this->request->getPost('R501GK4'),
            'R501GK6'   => $this->request->getPost('R501GK6'),
            'R501GK7'   => $this->request->getPost('R501GK7'),
            'R501GK6'   => $this->request->getPost('R501GK6'),
            'R501HK2'   => $this->request->getPost('R501HK2'),
            'R501HK3'   => $this->request->getPost('R501HK3'),
            'R501HK4'   => $this->request->getPost('R501HK4'),
            'R501HK6'   => $this->request->getPost('R501HK6'),
            'R501HK7'   => $this->request->getPost('R501HK7'),
            'R501IK2'   => $this->request->getPost('R501IK2'),
            'R501IK3'   => $this->request->getPost('R501IK3'),
            'R501IK4'   => $this->request->getPost('R501IK4'),
            'R501IK6'   => $this->request->getPost('R501IK6'),
            'R501IK7'   => $this->request->getPost('R501IK7'),
            'R501JK2'   => $this->request->getPost('R501JK2'),
            'R501JK3'   => $this->request->getPost('R501JK3'),
            'R501JK4'   => $this->request->getPost('R501JK4'),
            'R501JK6'   => $this->request->getPost('R501JK6'),
            'R501JK7'   => $this->request->getPost('R501JK7'),
            'R501KK2'   => $this->request->getPost('R501KK2'),
            'R501KK3'   => $this->request->getPost('R501KK3'),
            'R501KK4'   => $this->request->getPost('R501KK4'),
            'R501KK6'   => $this->request->getPost('R501KK6'),
            'R501KK7'   => $this->request->getPost('R501KK7'),
            'R502A'   => $this->request->getPost('R502A'),
            'R502B'   => $this->request->getPost('R502B'),
            'R502C'   => $this->request->getPost('R502C'),
            'R502D'   => $this->request->getPost('R502D'),
            'R502E'   => $this->request->getPost('R502E'),
            'R503A'   => $this->request->getPost('R503A'),
            'R503B'   => $this->request->getPost('R503B'),
            'R503C'   => $this->request->getPost('R503C'),
            'R503D'   => $this->request->getPost('R503D'),
            'R503E'   => $this->request->getPost('R503E'),
            'R501AK5'   => $R501AK5_str,
            'R501AK8'   => $R501AK8_str,
            'R501BK5'   => $R501BK5_str,
            'R501BK8'   => $R501BK8_str,
            'R501CK5'   => $R501CK5_str,
            'R501CK8'   => $R501CK8_str,
            'R501DK5'   => $R501DK5_str,
            'R501DK8'   => $R501DK8_str,
            'R501EK5'   => $R501DK5_str,
            'R501EK8'   => $R501DK8_str,
            'R501FK5'   => $R501DK5_str,
            'R501FK8'   => $R501DK8_str,
            'R501GK5'   => $R501DK5_str,
            'R501GK8'   => $R501DK8_str,
            'R501HK5'   => $R501DK5_str,
            'R501HK8'   => $R501DK8_str,
            'R501IK5'   => $R501DK5_str,
            'R501IK8'   => $R501DK8_str,
            'R501JK5'   => $R501DK5_str,
            'R501JK8'   => $R501DK8_str,
            'R501KK5'   => $R501DK5_str,
            'R501KK8'   => $R501DK8_str,
        ]);

        return redirect()->to(base_url('data/create5/'.$data_id));
    }

    public function save5($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R601AK2'   => $this->request->getPost('R601AK2'),
            'R601AK3'   => $this->request->getPost('R601AK3'),
            'R601AK4'   => $this->request->getPost('R601AK4'),
            'R601AK5'   => $this->request->getPost('R601AK5'),
            'R601BK2'   => $this->request->getPost('R601BK2'),
            'R601BK3'   => $this->request->getPost('R601BK3'),
            'R601BK4'   => $this->request->getPost('R601BK4'),
            'R601BK5'   => $this->request->getPost('R601BK5'),
            'R601CK2'   => $this->request->getPost('R601CK2'),
            'R601CK3'   => $this->request->getPost('R601CK3'),
            'R601CK4'   => $this->request->getPost('R601CK4'),
            'R601CK5'   => $this->request->getPost('R601CK5'),
            'R601DK2'   => $this->request->getPost('R601DK2'),
            'R601DK3'   => $this->request->getPost('R601DK3'),
            'R601DK4'   => $this->request->getPost('R601DK4'),
            'R601DK5'   => $this->request->getPost('R601DK5'),
            'R601EK2'   => $this->request->getPost('R601EK2'),
            'R601EK3'   => $this->request->getPost('R601EK3'),
            'R601EK4'   => $this->request->getPost('R601EK4'),
            'R601EK5'   => $this->request->getPost('R601EK5'),
            'R601FK2'   => $this->request->getPost('R601FK2'),
            'R601FK3'   => $this->request->getPost('R601FK3'),
            'R601FK4'   => $this->request->getPost('R601FK4'),
            'R601FK5'   => $this->request->getPost('R601FK5'),
            'R601GK2'   => $this->request->getPost('R601GK2'),
            'R601GK3'   => $this->request->getPost('R601GK3'),
            'R601GK4'   => $this->request->getPost('R601GK4'),
            'R601GK5'   => $this->request->getPost('R601GK5'),
            'R601HK2'   => $this->request->getPost('R601HK2'),
            'R601HK3'   => $this->request->getPost('R601HK3'),
            'R601HK4'   => $this->request->getPost('R601HK4'),
            'R601HK5'   => $this->request->getPost('R601HK5'),
            'R601IK2'   => $this->request->getPost('R601IK2'),
            'R601IK3'   => $this->request->getPost('R601IK3'),
            'R601IK4'   => $this->request->getPost('R601IK4'),
            'R601IK5'   => $this->request->getPost('R601IK5'),
            'R601JK2'   => $this->request->getPost('R601JK2'),
            'R601JK3'   => $this->request->getPost('R601JK3'),
            'R601JK4'   => $this->request->getPost('R601JK4'),
            'R601JK5'   => $this->request->getPost('R601JK5'),
            'R601KK2'   => $this->request->getPost('R601KK2'),
            'R601KK3'   => $this->request->getPost('R601KK3'),
            'R601KK4'   => $this->request->getPost('R601KK4'),
            'R601KK5'   => $this->request->getPost('R601KK5'),
            'R601LK2'   => $this->request->getPost('R601LK2'),
            'R601LK3'   => $this->request->getPost('R601LK3'),
            'R601MK2'   => $this->request->getPost('R601MK2'),
            'R601MK3'   => $this->request->getPost('R601MK3'),
            'R601NK2'   => $this->request->getPost('R601NK2'),
            'R601NK3'   => $this->request->getPost('R601NK3'),
            'R601OK2'   => $this->request->getPost('R601OK2'),
            'R601OK3'   => $this->request->getPost('R601OK3'),
            'R601PK3'   => $this->request->getPost('R601PK3'),
            'R601QK3'   => $this->request->getPost('R601QK3'),
            'R601R'   => $this->request->getPost('R601R'),
            'R602A'   => $this->request->getPost('R602A'),
            'R602B'   => $this->request->getPost('R602B'),
            'R602C'   => $this->request->getPost('R602C'),
            'R603A'   => $this->request->getPost('R603A'),
            'R603B'   => $this->request->getPost('R603B'),
            'R603C'   => $this->request->getPost('R603C'),
            'R603D'   => $this->request->getPost('R603D'),
            'R603E'   => $this->request->getPost('R603E'),
            'R603F'   => $this->request->getPost('R603F'),
            'R603G'   => $this->request->getPost('R603G'),
            'R604AK2'   => $this->request->getPost('R604AK2'),
            'R604BK2'   => $this->request->getPost('R604BK2'),
            'R604CK2'   => $this->request->getPost('R604CK2'),
            'R604DK2'   => $this->request->getPost('R604DK2'),
            'R604EK2'   => $this->request->getPost('R604EK2'),
            'R604FK2'   => $this->request->getPost('R604FK2'),
            'R604GK2'   => $this->request->getPost('R604GK2'),
            'R604HK2'   => $this->request->getPost('R604HK2'),
            'R604IK2'   => $this->request->getPost('R604IK2'),
            'R604JK2'   => $this->request->getPost('R604JK2'),
            'R604KK2'   => $this->request->getPost('R604KK2'),
            'R604LK2'   => $this->request->getPost('R604LK2'),
            'R604MK2'   => $this->request->getPost('R604MK2'),
            'R605A'   => $this->request->getPost('R605A'),
            'R605B'   => $this->request->getPost('R605B'),
            'R605C'   => $this->request->getPost('R605C'),
            'R605D'   => $this->request->getPost('R605D'),
            'R605E'   => $this->request->getPost('R605E'),
            'R606A1'   => $this->request->getPost('R606A1'),
            'R606A1S'   => $this->request->getPost('R606A1S'),
            'R606A2'   => $this->request->getPost('R606A2'),
            'R606A2S'   => $this->request->getPost('R606A2S'),
            'R606B'   => $this->request->getPost('R606B'),
            'R606BS'   => $this->request->getPost('R606BS'),
            'R606C'   => $this->request->getPost('R606C'),
            'R606CS'   => $this->request->getPost('R606CS'),
            'R606D'   => $this->request->getPost('R606D'),
            'R606DS'   => $this->request->getPost('R606DS'),
            'R607'   => $this->request->getPost('R607'),
            'R608'   => $this->request->getPost('R608'),
            'R609'   => $this->request->getPost('R609'),
            'R610'   => $this->request->getPost('R610'),
            'R611AK2'   => $this->request->getPost('R611AK2'),
            'R611AK3'   => $this->request->getPost('R611AK3'),
            'R611AK4'   => $this->request->getPost('R611AK4'),
            'R611BK2'   => $this->request->getPost('R611BK2'),
            'R611BK3'   => $this->request->getPost('R611BK3'),
            'R611BK4'   => $this->request->getPost('R611BK4'),
            'R611CK2'   => $this->request->getPost('R611CK2'),
            'R611CK3'   => $this->request->getPost('R611CK3'),
            'R611CK4'   => $this->request->getPost('R611CK4'),
            'R611DK2'   => $this->request->getPost('R611DK2'),
            'R611DK3'   => $this->request->getPost('R611DK3'),
            'R611DK4'   => $this->request->getPost('R611DK4'),
            'R611EK2'   => $this->request->getPost('R611EK2'),
            'R611EK3'   => $this->request->getPost('R611EK3'),
            'R611EK4'   => $this->request->getPost('R611EK4'),
            'R611FK2'   => $this->request->getPost('R611FK2'),
            'R611FK3'   => $this->request->getPost('R611FK3'),
            'R611FK4'   => $this->request->getPost('R611FK4'),
            'R611GK2'   => $this->request->getPost('R611GK2'),
            'R611GK3'   => $this->request->getPost('R611GK3'),
            'R611GK4'   => $this->request->getPost('R611GK4'),
            'R611HK2'   => $this->request->getPost('R611HK2'),
            'R611HK3'   => $this->request->getPost('R611HK3'),
            'R611HK4'   => $this->request->getPost('R611HK4'),
            'R611IK2'   => $this->request->getPost('R611IK2'),
            'R611IK3'   => $this->request->getPost('R611IK3'),
            'R611IK4'   => $this->request->getPost('R611IK4'),
            'R611JK2'   => $this->request->getPost('R611JK2'),
            'R611JK3'   => $this->request->getPost('R611JK3'),
            'R611JK4'   => $this->request->getPost('R611JK4'),
            'R601AK2S'   => $this->request->getPost('R601AK2S'),
            'R601AK3S'   => $this->request->getPost('R601AK3S'),
            'R601BK2S'   => $this->request->getPost('R601BK2S'),
            'R601BK3S'   => $this->request->getPost('R601BK3S'),
            'R601CK2S'   => $this->request->getPost('R601CK2S'),
            'R601CK3S'   => $this->request->getPost('R601CK3S'),
            'R601DK2S'   => $this->request->getPost('R601DK2S'),
            'R601DK3S'   => $this->request->getPost('R601DK3S'),
            'R601EK2S'   => $this->request->getPost('R601EK2S'),
            'R601EK3S'   => $this->request->getPost('R601EK3S'),
            'R601FK2S'   => $this->request->getPost('R601FK2S'),
            'R601FK3S'   => $this->request->getPost('R601FK3S'),
            'R601GK2S'   => $this->request->getPost('R601GK2S'),
            'R601GK3S'   => $this->request->getPost('R601GK3S'),
            'R601HK2S'   => $this->request->getPost('R601HK2S'),
            'R601HK3S'   => $this->request->getPost('R601HK3S'),
            'R601IK2S'   => $this->request->getPost('R601IK2S'),
            'R601IK3S'   => $this->request->getPost('R601IK3S'),
            'R601JK2S'   => $this->request->getPost('R601JK2S'),
            'R601JK3S'   => $this->request->getPost('R601JK3S'),
            'R601KK2S'   => $this->request->getPost('R601KK2S'),
            'R601KK3S'   => $this->request->getPost('R601KK3S'),
            'R601LK2S'   => $this->request->getPost('R601LK2S'),
            'R601LK3S'   => $this->request->getPost('R601LK3S'),
            'R601MK2S'   => $this->request->getPost('R601MK2S'),
            'R601MK3S'   => $this->request->getPost('R601MK3S'),
            'R601NK2S'   => $this->request->getPost('R601NK2S'),
            'R601NK3S'   => $this->request->getPost('R601NK3S'),
            'R601OK2S'   => $this->request->getPost('R601OK2S'),
            'R601OK3S'   => $this->request->getPost('R601OK3S'),
            'R601PK3S'   => $this->request->getPost('R601PK3S'),
            'R601QK3S'   => $this->request->getPost('R601QK3S'),
            'R604AK2S'   => $this->request->getPost('R604AK2S'),
            'R604BK2S'   => $this->request->getPost('R604BK2S'),
            'R604CK2S'   => $this->request->getPost('R604CK2S'),
            'R604DK2S'   => $this->request->getPost('R604DK2S'),
            'R604EK2S'   => $this->request->getPost('R604EK2S'),
            'R604FK2S'   => $this->request->getPost('R604FK2S'),
            'R604GK2S'   => $this->request->getPost('R604GK2S'),
            'R604HK2S'   => $this->request->getPost('R604HK2S'),
            'R604IK2S'   => $this->request->getPost('R604IK2S'),
            'R604JK2S'   => $this->request->getPost('R604JK2S'),
            'R604KK2S'   => $this->request->getPost('R604KK2S'),
            'R604LK2S'   => $this->request->getPost('R604LK2S'),
            'R604MK2S'   => $this->request->getPost('R604MK2S')
        ]);

        return redirect()->to(base_url('data/create6/'.$data_id));
    }

    public function save6($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R701_1'   => $this->request->getPost('R701_1'),
            'R701_2'   => $this->request->getPost('R701_2'),
            'R701_3'   => $this->request->getPost('R701_3'),
            'R701_4'   => $this->request->getPost('R701_4'),
            'R701_5'   => $this->request->getPost('R701_5'),
            'R701_6'   => $this->request->getPost('R701_6'),
            'R701_7'   => $this->request->getPost('R701_7'),
            'R702'   => $this->request->getPost('R702'),
            'R703A'   => $this->request->getPost('R703A'),
            'R703B'   => $this->request->getPost('R703B'),
            'R703C'   => $this->request->getPost('R703C'),
            'R703D'   => $this->request->getPost('R703D'),
            'R703E'   => $this->request->getPost('R703E'),
            'R703F'   => $this->request->getPost('R703F'),
            'R703G'   => $this->request->getPost('R703G'),
            'R703H'   => $this->request->getPost('R703H'),
            'R703I'   => $this->request->getPost('R703I'),
            'R703J'   => $this->request->getPost('R703J'),
            'R704A'   => $this->request->getPost('R704A'),
            'R704B'   => $this->request->getPost('R704B'),
            'R705A'   => $this->request->getPost('R705A'),
            'R705B'   => $this->request->getPost('R705B'),
            'R705C'   => $this->request->getPost('R705C'),
            'R705D'   => $this->request->getPost('R705D'),
            'R705E'   => $this->request->getPost('R705E'),
            'R705F'   => $this->request->getPost('R705F'),
            'R705G'   => $this->request->getPost('R705G'),
            'R705H'   => $this->request->getPost('R705H'),
            'R705I'   => $this->request->getPost('R705I'),
            'R706'   => $this->request->getPost('R706'),
            'R707'   => $this->request->getPost('R707'),
            'R707S'   => $this->request->getPost('R707S'),
            'R708A'   => $this->request->getPost('R708A'),
            'R708AS'   => $this->request->getPost('R708AS'),
            'R708B'   => $this->request->getPost('R708B'),
            'R708BS'   => $this->request->getPost('R708BS'),
            'R708C'   => $this->request->getPost('R708C'),
            'R708CS'   => $this->request->getPost('R708CS'),
            'R708D'   => $this->request->getPost('R708D'),
            'R708DS'   => $this->request->getPost('R708DS'),
            'R708E'   => $this->request->getPost('R708E'),
            'R708ES'   => $this->request->getPost('R708ES'),
            'R708F'   => $this->request->getPost('R708F'),
            'R708FS'   => $this->request->getPost('R708FS'),
            'R801AK2'   => $this->request->getPost('R801AK2'),
            'R801AK3'   => $this->request->getPost('R801AK3'),
            'R801AK4'   => $this->request->getPost('R801AK4'),
            'R801BK2'   => $this->request->getPost('R801BK2'),
            'R801BK3'   => $this->request->getPost('R801BK3'),
            'R801BK4'   => $this->request->getPost('R801BK4'),
            'R801CK2'   => $this->request->getPost('R801CK2'),
            'R801CK3'   => $this->request->getPost('R801CK3'),
            'R801CK4'   => $this->request->getPost('R801CK4'),
            'R801DK2'   => $this->request->getPost('R801DK2'),
            'R801DK3'   => $this->request->getPost('R801DK3'),
            'R801DK4'   => $this->request->getPost('R801DK4'),
            'R801EK2'   => $this->request->getPost('R801EK2'),
            'R801EK3'   => $this->request->getPost('R801EK3'),
            'R801EK4'   => $this->request->getPost('R801EK4'),
            'R801FK2'   => $this->request->getPost('R801FK2'),
            'R801FK3'   => $this->request->getPost('R801FK3'),
            'R801FK4'   => $this->request->getPost('R801FK4'),
            'R801GK2'   => $this->request->getPost('R801GK2'),
            'R801GK3'   => $this->request->getPost('R801GK3'),
            'R801GK4'   => $this->request->getPost('R801GK4'),
            'R801HK2'   => $this->request->getPost('R801HK2'),
            'R801HK3'   => $this->request->getPost('R801HK3'),
            'R801HK4'   => $this->request->getPost('R801HK4'),
            'R801IK2'   => $this->request->getPost('R801IK2'),
            'R801IK3'   => $this->request->getPost('R801IK3'),
            'R801IK4'   => $this->request->getPost('R801IK4'),
            'R801JK2'   => $this->request->getPost('R801JK2'),
            'R801JK3'   => $this->request->getPost('R801JK3'),
            'R801JK4'   => $this->request->getPost('R801JK4'),
            'R801KK2'   => $this->request->getPost('R801KK2'),
            'R801KK3'   => $this->request->getPost('R801KK3'),
            'R801KK4'   => $this->request->getPost('R801KK4'),
            'R801LK2'   => $this->request->getPost('R801LK2'),
            'R801LK3'   => $this->request->getPost('R801LK3'),
            'R801LK4'   => $this->request->getPost('R801LK4'),
            'R802'   => $this->request->getPost('R802'),
            'R803'   => $this->request->getPost('R803'),
            'R803S'   => $this->request->getPost('R803S')
        ]);

        return redirect()->to(base_url('data/create7/'.$data_id));
    }

    public function save7($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R901A1'   => $this->request->getPost('R901A1'),
            'R901A2'   => $this->request->getPost('R901A2'),
            'R901B'   => $this->request->getPost('R901B'),
            'R901C'   => $this->request->getPost('R901C'),
            'R1001A'   => $this->request->getPost('R1001A'),
            'R1001B'   => $this->request->getPost('R1001B'),
            'R1001C'   => $this->request->getPost('R1001C'),
            'R1001D'   => $this->request->getPost('R1001D'),
            'R1001E'   => $this->request->getPost('R1001E'),
            'R1001F'   => $this->request->getPost('R1001F'),
            'R1001G'   => $this->request->getPost('R1001G'),
            'R1001H'   => $this->request->getPost('R1001H'),
            'R1001I'   => $this->request->getPost('R1001I'),
            'R1001J'   => $this->request->getPost('R1001J'),
            'R1001K'   => $this->request->getPost('R1001K'),
            'R1001L'   => $this->request->getPost('R1001L'),
            'R1001M'   => $this->request->getPost('R1001M'),
            'R1001N'   => $this->request->getPost('R1001N'),
            'R1001O'   => $this->request->getPost('R1001O'),
            'R1001P'   => $this->request->getPost('R1001P'),
            'R1001PS'   => $this->request->getPost('R1001PS'),
            'R1002'   => $this->request->getPost('R1002'),
            'R1003'   => $this->request->getPost('R1003'),
            'R1004A1'   => $this->request->getPost('R1004A1'),
            'R1004A2'   => $this->request->getPost('R1004A2'),
            'R1004A3'   => $this->request->getPost('R1004A3'),
            'R1005A1'   => $this->request->getPost('R1005A1'),
            'R1005A2'   => $this->request->getPost('R1005A2'),
            'R1005A3'   => $this->request->getPost('R1005A3'),
            'R1005A4'   => $this->request->getPost('R1005A4'),
            'R1005A4S'   => $this->request->getPost('R1005A4S'),
            'R1006AK2'   => $this->request->getPost('R1006AK2'),
            'R1006AK3'   => $this->request->getPost('R1006AK3'),
            'R1006AK4'   => $this->request->getPost('R1006AK4'),
            'R1006BK2'   => $this->request->getPost('R1006BK2'),
            'R1006BK3'   => $this->request->getPost('R1006BK3'),
            'R1006BK4'   => $this->request->getPost('R1006BK4'),
            'R1006CK2'   => $this->request->getPost('R1006CK2'),
            'R1006CK3'   => $this->request->getPost('R1006CK3'),
            'R1006CK4'   => $this->request->getPost('R1006CK4'),
            'R1006DK2'   => $this->request->getPost('R1006DK2'),
            'R1006DK3'   => $this->request->getPost('R1006DK3'),
            'R1006DK4'   => $this->request->getPost('R1006DK4'),
            'R1006EK2'   => $this->request->getPost('R1006EK2'),
            'R1006EK3'   => $this->request->getPost('R1006EK3'),
            'R1006EK4'   => $this->request->getPost('R1006EK4'),
            'R1006FK2'   => $this->request->getPost('R1006FK2'),
            'R1006FK3'   => $this->request->getPost('R1006FK3'),
            'R1006FK4'   => $this->request->getPost('R1006FK4'),
            'R1006GK2'   => $this->request->getPost('R1006GK2'),
            'R1006GK3'   => $this->request->getPost('R1006GK3'),
            'R1006GK4'   => $this->request->getPost('R1006GK4'),
            'R1006HK2'   => $this->request->getPost('R1006HK2'),
            'R1006HK3'   => $this->request->getPost('R1006HK3'),
            'R1006HK4'   => $this->request->getPost('R1006HK4'),
            'R1006IK2'   => $this->request->getPost('R1006IK2'),
            'R1006IK3'   => $this->request->getPost('R1006IK3'),
            'R1006IK4'   => $this->request->getPost('R1006IK4'),
            'R1006AK2S'   => $this->request->getPost('R1006AK2S'),
            'R1006BK2S'   => $this->request->getPost('R1006BK2S'),
            'R1006CK2S'   => $this->request->getPost('R1006CK2S'),
            'R1006DK2S'   => $this->request->getPost('R1006DK2S'),
            'R1006EK2S'   => $this->request->getPost('R1006EK2S'),
            'R1006FK2S'   => $this->request->getPost('R1006FK2S'),
            'R1006GK2S'   => $this->request->getPost('R1006GK2S'),
            'R1006HK2S'   => $this->request->getPost('R1006HK2S'),
            'R1006IK2S'   => $this->request->getPost('R1006IK2S'),
            'R1007AK2'   => $this->request->getPost('R1007AK2'),
            'R1007AK3'   => $this->request->getPost('R1007AK3'),
            'R1007AK4'   => $this->request->getPost('R1007AK4'),
            'R1007BK2'   => $this->request->getPost('R1007BK2'),
            'R1007BK3'   => $this->request->getPost('R1007BK3'),
            'R1007BK4'   => $this->request->getPost('R1007BK4'),
            'R1007CK2'   => $this->request->getPost('R1007CK2'),
            'R1007CK3'   => $this->request->getPost('R1007CK3'),
            'R1007CK4'   => $this->request->getPost('R1007CK4'),
            'R1007DK2'   => $this->request->getPost('R1007DK2'),
            'R1007DK3'   => $this->request->getPost('R1007DK3'),
            'R1007DK4'   => $this->request->getPost('R1007DK4'),
            'R1007EK2'   => $this->request->getPost('R1007EK2'),
            'R1007EK3'   => $this->request->getPost('R1007EK3'),
            'R1007EK4'   => $this->request->getPost('R1007EK4'),
            'R1007FK2'   => $this->request->getPost('R1007FK2'),
            'R1007FK3'   => $this->request->getPost('R1007FK3'),
            'R1007FK4'   => $this->request->getPost('R1007FK4'),
            'R1007GK2'   => $this->request->getPost('R1007GK2'),
            'R1007GK3'   => $this->request->getPost('R1007GK3'),
            'R1007GK4'   => $this->request->getPost('R1007GK4'),
            'R1007HK2'   => $this->request->getPost('R1007HK2'),
            'R1007HK3'   => $this->request->getPost('R1007HK3'),
            'R1007HK4'   => $this->request->getPost('R1007HK4'),
            'R1007IK2'   => $this->request->getPost('R1007IK2'),
            'R1007IK3'   => $this->request->getPost('R1007IK3'),
            'R1007IK4'   => $this->request->getPost('R1007IK4'),
            'R1007JK2'   => $this->request->getPost('R1007JK2'),
            'R1007JK3'   => $this->request->getPost('R1007JK3'),
            'R1007JK4'   => $this->request->getPost('R1007JK4')
        ]);

        return redirect()->to(base_url('data/create8/'.$data_id));
    }

    public function save8($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R110301K3'   => $this->request->getPost('R110301K3'),
            'R110301K4'   => $this->request->getPost('R110301K4'),
            'R110302K3'   => $this->request->getPost('R110302K3'),
            'R110302K4'   => $this->request->getPost('R110302K4'),
            'R110303K3'   => $this->request->getPost('R110303K3'),
            'R110303K4'   => $this->request->getPost('R110303K4'),
            'R110304K3'   => $this->request->getPost('R110304K3'),
            'R110304K4'   => $this->request->getPost('R110304K4'),
            'R110305K3'   => $this->request->getPost('R110305K3'),
            'R110305K4'   => $this->request->getPost('R110305K4'),
            'R110306K3'   => $this->request->getPost('R110306K3'),
            'R110306K4'   => $this->request->getPost('R110306K4'),
            'R110307K3'   => $this->request->getPost('R110307K3'),
            'R110307K4'   => $this->request->getPost('R110307K4'),
            'R110308K3'   => $this->request->getPost('R110308K3'),
            'R110308K4'   => $this->request->getPost('R110308K4'),
            'R110309K3'   => $this->request->getPost('R110309K3'),
            'R110309K4'   => $this->request->getPost('R110309K4'),
            'R110310K3'   => $this->request->getPost('R110310K3'),
            'R110310K4'   => $this->request->getPost('R110310K4'),
            'R110311K3'   => $this->request->getPost('R110311K3'),
            'R110311K4'   => $this->request->getPost('R110311K4'),
            'R1102'   => $this->request->getPost('R1102'),
            'R1103'   => $this->request->getPost('R1103'),
            'R1103S'   => $this->request->getPost('R1103S'),
            'R1104AK2'   => $this->request->getPost('R1104AK2'),
            'R1104AK3'   => $this->request->getPost('R1104AK3'),
            'R1104BK2'   => $this->request->getPost('R1104BK2'),
            'R1104BK3'   => $this->request->getPost('R1104BK3'),
            'R1201A'   => $this->request->getPost('R1201A'),
            'R1201B'   => $this->request->getPost('R1201B'),
            'R1201C'   => $this->request->getPost('R1201C'),
            'R1201D'   => $this->request->getPost('R1201D'),
            'R1201E'   => $this->request->getPost('R1201E'),
            'R1201F'   => $this->request->getPost('R1201F'),
            'R1201G'   => $this->request->getPost('R1201G'),
            'R1201H'   => $this->request->getPost('R1201H'),
            'R1201I'   => $this->request->getPost('R1201I'),
            'R1202A1'   => $this->request->getPost('R1202A1'),
            'R1202B'   => $this->request->getPost('R1202B'),
            'R1202C'   => $this->request->getPost('R1202C'),
            'R1202D'   => $this->request->getPost('R1202D'),
            'R1203A'   => $this->request->getPost('R1203A'),
            'R1203B'   => $this->request->getPost('R1203B'),
            'R1204'   => $this->request->getPost('R1204'),
            'R1204S'   => $this->request->getPost('R1204S'),
            'R1205A'   => $this->request->getPost('R1205A'),
            'R1205AS'   => $this->request->getPost('R1205AS'),
            'R1205B'   => $this->request->getPost('R1205B')
        ]);

        return redirect()->to(base_url('data/create9/'.$data_id));
    }

    public function save9($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R1301AK2'   => $this->request->getPost('R1301AK2'),
            'R1301AK3'   => $this->request->getPost('R1301AK3'),
            'R1301AK4'   => $this->request->getPost('R1301AK4'),
            'R1301AK5'   => $this->request->getPost('R1301AK5'),
            'R1301BK2'   => $this->request->getPost('R1301BK2'),
            'R1301BK3'   => $this->request->getPost('R1301BK3'),
            'R1301BK4'   => $this->request->getPost('R1301BK4'),
            'R1301BK5'   => $this->request->getPost('R1301BK5'),
            'R1301CK2'   => $this->request->getPost('R1301CK2'),
            'R1301CK3'   => $this->request->getPost('R1301CK3'),
            'R1301CK4'   => $this->request->getPost('R1301CK4'),
            'R1301CK5'   => $this->request->getPost('R1301CK5'),
            'R1302_1'   => $this->request->getPost('R1302_1'),
            'R1302_1A'   => $this->request->getPost('R1302_1A'),
            'R1302_1B'   => $this->request->getPost('R1302_1B'),
            'R1302_1C'   => $this->request->getPost('R1302_1C'),
            'R1302_1D'   => $this->request->getPost('R1302_1D'),
            'R1302_2'   => $this->request->getPost('R1302_2'),
            'R1302_3'   => $this->request->getPost('R1302_3'),
            'R1302_4'   => $this->request->getPost('R1302_4'),
            'R1302_5'   => $this->request->getPost('R1302_5'),
            'R1302_6'   => $this->request->getPost('R1302_6'),
            'R1302_7'   => $this->request->getPost('R1302_7'),
            'R1302_8'   => $this->request->getPost('R1302_8'),
            'R1302_9'   => $this->request->getPost('R1302_9'),
            'R1302_10'   => $this->request->getPost('R1302_10'),
            'R1302_11'   => $this->request->getPost('R1302_11'),
            'R1303A'   => $this->request->getPost('R1303A'),
            'R1303B'   => $this->request->getPost('R1303B'),
            'R1303C'   => $this->request->getPost('R1303C'),
            'R1304A'   => $this->request->getPost('R1304A'),
            'R1304B'   => $this->request->getPost('R1304B'),
            'R1304C'   => $this->request->getPost('R1304C')
        ]);

        return redirect()->to(base_url('data/create10/'.$data_id));
    }

    public function save10($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R1401AK2'   => $this->request->getPost('R1401AK2'),
            'R1401AK2S'   => $this->request->getPost('R1401AK2S'),
            'R1401AK3'   => $this->request->getPost('R1401AK3'),
            'R1401AK4'   => $this->request->getPost('R1401AK4'),
            'R1401AK5'   => $this->request->getPost('R1401AK5'),
            'R1401AK6'   => $this->request->getPost('R1401AK6'),
            'R1401BK2'   => $this->request->getPost('R1401BK2'),
            'R1401BK2S'   => $this->request->getPost('R1401BK2S'),
            'R1401BK3'   => $this->request->getPost('R1401BK3'),
            'R1401BK4'   => $this->request->getPost('R1401BK4'),
            'R1401BK5'   => $this->request->getPost('R1401BK5'),
            'R1401BK6'   => $this->request->getPost('R1401BK6'),
            'R1402A'   => $this->request->getPost('R1402A'),
            'R1402A1'   => $this->request->getPost('R1402A1'),
            'R1402B'   => $this->request->getPost('R1402B'),
            'R1402B1'   => $this->request->getPost('R1402B1'),
            'R1402C'   => $this->request->getPost('R1402C'),
            'R1402C1'   => $this->request->getPost('R1402C1'),
            'R1402D'   => $this->request->getPost('R1402D'),
            'R1402D1'   => $this->request->getPost('R1402D1'),
            'R1403'   => $this->request->getPost('R1403'),
            'R1404A'   => $this->request->getPost('R1404A'),
            'R1404B'   => $this->request->getPost('R1404B'),
            'R1404C'   => $this->request->getPost('R1404C'),
            'R1404D'   => $this->request->getPost('R1404D')
        ]);

        return redirect()->to(base_url('data_prospera'));
    }

    /**
     * edit function
     */
    public function edit()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'kecamatan' => $this->kecamatanModel->findAll(),
            'desa' => $this->desaModel->findAll(),
            'sls' => $this->slsModel->getSlsByDesaId($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit', $data)
                . view('templates/footer');
    }

    public function edit2()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit2', $data)
                . view('templates/footer');
    }

    public function edit3()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit3', $data)
                . view('templates/footer');
    }

    public function edit4()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit4', $data)
                . view('templates/footer');
    }

    public function edit5()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit5', $data)
                . view('templates/footer');
    }

    public function edit6()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit6', $data)
                . view('templates/footer');
    }

    public function edit7()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit7', $data)
                . view('templates/footer');
    }

    public function edit8()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit8', $data)
                . view('templates/footer');
    }

    public function edit9()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit9', $data)
                . view('templates/footer');
    }

    public function edit10()
    {
        $request = $this->request;
        $id = $request->getUri()->getSegment(3);
        // model initialize
        $dataModel = new data_model();

        $data = array(
            'data' => $dataModel->find($id),
            'ques' => $this->quesModel->findAll()
        );

        return view('templates/header')
                . view('templates/menu')
                . view('data/edit/edit10', $data)
                . view('templates/footer');
    }

    public function simpan1($data_id)
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
            'R105' => $this->request->getPost('R105'),
            'R202'   => $this->request->getPost('R202'),
            'R203B1'   => $this->request->getPost('R203B1'),
            'R203B1_LAT' => $this->request->getPost('R203B1_LAT'),
            'R203B1_LA0' => $this->request->getPost('R203B1_LA0'),
            'R203B1_LON' => $this->request->getPost('R203B1_LON'),
            'R203B2' => $this->request->getPost('R203B2')
        ]);

        $requestData = $this->request->getPost();
        $slsModel = new sls_model();

        // Menyimpan data SLS baru
        if (!empty($requestData['new_sls'])) {
            foreach ($requestData['new_sls'] as $newSls) {
                $slsModel->save([
                    'data_id' => $data_id,
                    'kode_desa' => $this->request->getPost('R104'),
                    'kode_sls' => $newSls['kode_sls'],
                    'nama_sls' => $newSls['nama_sls']
                ]);
            }
        }

        // Mengupdate data SLS yang ada
        if (!empty($requestData['sls'])) {
            foreach ($requestData['sls'] as $slsData) {
                $slsModel->update($slsData['sls_id'], [
                    'kode_sls' => $slsData['kode_sls'],
                    'nama_sls' => $slsData['nama_sls']
                ]);
            }
        }

        return redirect()->to(base_url('data/edit2/'.$data_id));
    }

    public function hapusSls($id, $data_id)
    {
        $slsModel = new sls_model();
        // Validate that the SLS belongs to the data ID
        $sls = $slsModel->where('data_id', $data_id)->find($id);
        if ($sls) {
            $slsModel->delete($id);
        }
        return redirect()->to(base_url('data/edit/'.$data_id));
    }


    public function simpan2($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();

        //insert data into database
        $dataModel->update($data_id, [
            'R301'   => $this->request->getPost('R301'),
            'R301A'   => $this->request->getPost('R301A'),
            'R301B'   => $this->request->getPost('R301B'),
            'R301C'   => $this->request->getPost('R301C'),
            'R301D'   => $this->request->getPost('R301D'),
            'R302A'   => $this->request->getPost('R302A'),
            'R302A1'   => $this->request->getPost('R302A1'),
            'R302A2'   => $this->request->getPost('R302A2'),
            'R302B'   => $this->request->getPost('R302B'),
            'R302B1'   => $this->request->getPost('R302B1'),
            'R302B2'   => $this->request->getPost('R302B2'),
            'R303'   => $this->request->getPost('R303'),
            'R303A'   => $this->request->getPost('R303A'),
            'R303B'   => $this->request->getPost('R303B'),
            'R303C'   => $this->request->getPost('R303C'),
            'R303D'   => $this->request->getPost('R303D'),
            'R303E'   => $this->request->getPost('R303E'),
            'R303F'   => $this->request->getPost('R303F'),
            'R303G'   => $this->request->getPost('R303G'),
            'R303H'   => $this->request->getPost('R303H'),
            'R303I'   => $this->request->getPost('R303I'),
            'R303J'   => $this->request->getPost('R303J'),
            'R303K'   => $this->request->getPost('R303K'),
            'R303L'   => $this->request->getPost('R303L'),
            'R303M'   => $this->request->getPost('R303M'),
            'R303N'   => $this->request->getPost('R303N'),
            'R303O'   => $this->request->getPost('R303O'),
            'R303P'   => $this->request->getPost('R303P'),
            'R303Q'   => $this->request->getPost('R303Q'),
            'R303R'   => $this->request->getPost('R303R'),
            'R303S'   => $this->request->getPost('R303S'),
            'R303T'   => $this->request->getPost('R303T'),
            'R303U'   => $this->request->getPost('R303U'),
            'R304A'   => $this->request->getPost('R304A'),
            'R304B'   => $this->request->getPost('R304B')
        ]);

        return redirect()->to(base_url('data/edit3/'.$data_id));
    }

    public function simpan3($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R401A1'   => $this->request->getPost('R401A1'),
            'R401A2'   => $this->request->getPost('R401A2'),
            'R401B'   => $this->request->getPost('R401B'),
            'R402'   => $this->request->getPost('R402'),
            'R402S'   => $this->request->getPost('R402S'),
            'R403A'   => $this->request->getPost('R403A'),
            'R403B'   => $this->request->getPost('R403B'),
            'R403C1'   => $this->request->getPost('R403C1'),
            'R403C1A'   => $this->request->getPost('R403C1A'),
            'R403C2'   => $this->request->getPost('R403C2'),
            'R403C3'   => $this->request->getPost('R403C3'),
            'R404AK2'   => $this->request->getPost('R404AK2'),
            'R404AK3'   => $this->request->getPost('R404AK3'),
            'R404AK4'   => $this->request->getPost('R404AK4'),
            'R404AK5'   => $this->request->getPost('R404AK5'),
            'R404B1K2'   => $this->request->getPost('R404B1K2'),
            'R404B1K3'   => $this->request->getPost('R404B1K3'),
            'R404B1K4'   => $this->request->getPost('R404B1K4'),
            'R404B1K5'   => $this->request->getPost('R404B1K5'),
            'R404B2K2'   => $this->request->getPost('R404B2K2'),
            'R404B2K3'   => $this->request->getPost('R404B2K3'),
            'R404B2K4'   => $this->request->getPost('R404B2K4'),
            'R404B2K5'   => $this->request->getPost('R404B2K5'),
            'R404B3K2'   => $this->request->getPost('R404B3K2'),
            'R404B3K3'   => $this->request->getPost('R404B3K3'),
            'R404B3K4'   => $this->request->getPost('R404B3K4'),
            'R404B3K5'   => $this->request->getPost('R404B3K5'),
            'R404B4K2'   => $this->request->getPost('R404B4K2'),
            'R404B4K3'   => $this->request->getPost('R404B4K3'),
            'R404B4K4'   => $this->request->getPost('R404B4K4'),
            'R404B4K5'   => $this->request->getPost('R404B4K5'),
            'R404B5K2'   => $this->request->getPost('R404B5K2'),
            'R404B5K3'   => $this->request->getPost('R404B5K3'),
            'R404B5K4'   => $this->request->getPost('R404B5K4'),
            'R404B5K5'   => $this->request->getPost('R404B5K5'),
            'R404B6K2'   => $this->request->getPost('R404B6K2'),
            'R404B6K3'   => $this->request->getPost('R404B6K3'),
            'R404B6K4'   => $this->request->getPost('R404B6K4'),
            'R404B6K5'   => $this->request->getPost('R404B6K5'),
            'R404B7K2'   => $this->request->getPost('R404B7K2'),
            'R404B7K3'   => $this->request->getPost('R404B7K3'),
            'R404B7K4'   => $this->request->getPost('R404B7K4'),
            'R404B7K5'   => $this->request->getPost('R404B7K5'),
            'R404B8K2'   => $this->request->getPost('R404B8K2'),
            'R404B8K3'   => $this->request->getPost('R404B8K3'),
            'R404B8K4'   => $this->request->getPost('R404B8K4'),
            'R404B8K5'   => $this->request->getPost('R404B8K5'),
            'R404B9K2'   => $this->request->getPost('R404B9K2'),
            'R404B9K3'   => $this->request->getPost('R404B9K3'),
            'R404B9K4'   => $this->request->getPost('R404B9K4'),
            'R404B9K5'   => $this->request->getPost('R404B9K5'),
            'R404B10K2'   => $this->request->getPost('R404B10K2'),
            'R404B10K3'   => $this->request->getPost('R404B10K3'),
            'R404B10K4'   => $this->request->getPost('R404B10K4'),
            'R404B10K5'   => $this->request->getPost('R404B10K5'),
            'R405A'   => $this->request->getPost('R405A'),
            'R405B1'   => $this->request->getPost('R405B1'),
            'R405B2'   => $this->request->getPost('R405B2'),
            'R405B3'   => $this->request->getPost('R405B3'),
            'R406A'   => $this->request->getPost('R406A'),
            'R406B1'   => $this->request->getPost('R406B1'),
            'R406B2'   => $this->request->getPost('R406B2'),
            'R406B3'   => $this->request->getPost('R406B3'),
            'R407'   => $this->request->getPost('R407'),
            'R407S'   => $this->request->getPost('R407S'),
            'R408'   => $this->request->getPost('R408'),
            'R408A'   => $this->request->getPost('R408A')
        ]);

        return redirect()->to(base_url('data/edit4/'.$data_id));
    }

    public function simpan4($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        
        $R501AK5   = $this->request->getPost('R501AK5');
        $R501AK8   = $this->request->getPost('R501AK8');
        $R501BK5   = $this->request->getPost('R501BK5');
        $R501BK8   = $this->request->getPost('R501BK8');
        $R501CK5   = $this->request->getPost('R501CK5');
        $R501CK8   = $this->request->getPost('R501CK8');
        $R501DK5   = $this->request->getPost('R501DK5');
        $R501DK8   = $this->request->getPost('R501DK8');
        $R501EK5   = $this->request->getPost('R501EK5');
        $R501EK8   = $this->request->getPost('R501EK8');
        $R501FK5   = $this->request->getPost('R501FK5');
        $R501FK8   = $this->request->getPost('R501FK8');
        $R501GK5   = $this->request->getPost('R501GK5');
        $R501GK8   = $this->request->getPost('R501GK8');
        $R501HK5   = $this->request->getPost('R501HK5');
        $R501HK8   = $this->request->getPost('R501HK8');
        $R501IK5   = $this->request->getPost('R501IK5');
        $R501IK8   = $this->request->getPost('R501IK8');
        $R501JK5   = $this->request->getPost('R501JK5');
        $R501JK8   = $this->request->getPost('R501JK8');
        $R501KK5   = $this->request->getPost('R501KK5');
        $R501KK8   = $this->request->getPost('R501KK8');

        // Ubah array menjadi string
        $R501AK5_str = is_array($R501AK5) ? implode(',', $R501AK5) : '';
        $R501AK8_str = is_array($R501AK8) ? implode(',', $R501AK8) : '';
        $R501BK5_str = is_array($R501BK5) ? implode(',', $R501BK5) : '';
        $R501BK8_str = is_array($R501BK8) ? implode(',', $R501BK8) : '';
        $R501CK5_str = is_array($R501CK5) ? implode(',', $R501CK5) : '';
        $R501CK8_str = is_array($R501CK8) ? implode(',', $R501CK8) : '';
        $R501DK5_str = is_array($R501DK5) ? implode(',', $R501DK5) : '';
        $R501DK8_str = is_array($R501DK8) ? implode(',', $R501DK8) : '';
        $R501EK5_str = is_array($R501EK5) ? implode(',', $R501EK5) : '';
        $R501EK8_str = is_array($R501EK8) ? implode(',', $R501EK8) : '';
        $R501FK5_str = is_array($R501FK5) ? implode(',', $R501FK5) : '';
        $R501FK8_str = is_array($R501FK8) ? implode(',', $R501FK8) : '';
        $R501GK5_str = is_array($R501GK5) ? implode(',', $R501GK5) : '';
        $R501GK8_str = is_array($R501GK8) ? implode(',', $R501GK8) : '';
        $R501HK5_str = is_array($R501HK5) ? implode(',', $R501HK5) : '';
        $R501HK8_str = is_array($R501HK8) ? implode(',', $R501HK8) : '';
        $R501IK5_str = is_array($R501IK5) ? implode(',', $R501IK5) : '';
        $R501IK8_str = is_array($R501IK8) ? implode(',', $R501IK8) : '';
        $R501JK5_str = is_array($R501JK5) ? implode(',', $R501JK5) : '';
        $R501JK8_str = is_array($R501JK8) ? implode(',', $R501JK8) : '';
        $R501KK5_str = is_array($R501KK5) ? implode(',', $R501KK5) : '';
        $R501KK8_str = is_array($R501KK8) ? implode(',', $R501KK8) : '';


        //insert data into database
        $dataModel->update($data_id, [
            'R501AK2'   => $this->request->getPost('R501AK2'),
            'R501AK3'   => $this->request->getPost('R501AK3'),
            'R501AK4'   => $this->request->getPost('R501AK4'),
            'R501AK6'   => $this->request->getPost('R501AK6'),
            'R501AK7'   => $this->request->getPost('R501AK7'),
            'R501BK2'   => $this->request->getPost('R501BK2'),
            'R501BK3'   => $this->request->getPost('R501BK3'),
            'R501BK4'   => $this->request->getPost('R501BK4'),
            'R501BK6'   => $this->request->getPost('R501BK6'),
            'R501BK7'   => $this->request->getPost('R501BK7'),
            'R501CK2'   => $this->request->getPost('R501CK2'),
            'R501CK3'   => $this->request->getPost('R501CK3'),
            'R501CK4'   => $this->request->getPost('R501CK4'),
            'R501CK6'   => $this->request->getPost('R501CK6'),
            'R501CK7'   => $this->request->getPost('R501CK7'),
            'R501DK2'   => $this->request->getPost('R501DK2'),
            'R501DK3'   => $this->request->getPost('R501DK3'),
            'R501DK4'   => $this->request->getPost('R501DK4'),
            'R501DK6'   => $this->request->getPost('R501DK6'),
            'R501DK7'   => $this->request->getPost('R501DK7'),
            'R501EK2'   => $this->request->getPost('R501EK2'),
            'R501EK3'   => $this->request->getPost('R501EK3'),
            'R501EK4'   => $this->request->getPost('R501EK4'),
            'R501EK6'   => $this->request->getPost('R501EK6'),
            'R501EK7'   => $this->request->getPost('R501EK7'),
            'R501FK2'   => $this->request->getPost('R501FK2'),
            'R501FK3'   => $this->request->getPost('R501FK3'),
            'R501FK4'   => $this->request->getPost('R501FK4'),
            'R501FK6'   => $this->request->getPost('R501FK6'),
            'R501FK7'   => $this->request->getPost('R501FK7'),
            'R501GK2'   => $this->request->getPost('R501GK2'),
            'R501GK3'   => $this->request->getPost('R501GK3'),
            'R501GK4'   => $this->request->getPost('R501GK4'),
            'R501GK6'   => $this->request->getPost('R501GK6'),
            'R501GK7'   => $this->request->getPost('R501GK7'),
            'R501GK6'   => $this->request->getPost('R501GK6'),
            'R501HK2'   => $this->request->getPost('R501HK2'),
            'R501HK3'   => $this->request->getPost('R501HK3'),
            'R501HK4'   => $this->request->getPost('R501HK4'),
            'R501HK6'   => $this->request->getPost('R501HK6'),
            'R501HK7'   => $this->request->getPost('R501HK7'),
            'R501IK2'   => $this->request->getPost('R501IK2'),
            'R501IK3'   => $this->request->getPost('R501IK3'),
            'R501IK4'   => $this->request->getPost('R501IK4'),
            'R501IK6'   => $this->request->getPost('R501IK6'),
            'R501IK7'   => $this->request->getPost('R501IK7'),
            'R501JK2'   => $this->request->getPost('R501JK2'),
            'R501JK3'   => $this->request->getPost('R501JK3'),
            'R501JK4'   => $this->request->getPost('R501JK4'),
            'R501JK6'   => $this->request->getPost('R501JK6'),
            'R501JK7'   => $this->request->getPost('R501JK7'),
            'R501KK2'   => $this->request->getPost('R501KK2'),
            'R501KK3'   => $this->request->getPost('R501KK3'),
            'R501KK4'   => $this->request->getPost('R501KK4'),
            'R501KK6'   => $this->request->getPost('R501KK6'),
            'R501KK7'   => $this->request->getPost('R501KK7'),
            'R502A'   => $this->request->getPost('R502A'),
            'R502B'   => $this->request->getPost('R502B'),
            'R502C'   => $this->request->getPost('R502C'),
            'R502D'   => $this->request->getPost('R502D'),
            'R502E'   => $this->request->getPost('R502E'),
            'R503A'   => $this->request->getPost('R503A'),
            'R503B'   => $this->request->getPost('R503B'),
            'R503C'   => $this->request->getPost('R503C'),
            'R503D'   => $this->request->getPost('R503D'),
            'R503E'   => $this->request->getPost('R503E'),
            'R501AK5'   => $R501AK5_str,
            'R501AK8'   => $R501AK8_str,
            'R501BK5'   => $R501BK5_str,
            'R501BK8'   => $R501BK8_str,
            'R501CK5'   => $R501CK5_str,
            'R501CK8'   => $R501CK8_str,
            'R501DK5'   => $R501DK5_str,
            'R501DK8'   => $R501DK8_str,
            'R501EK5'   => $R501DK5_str,
            'R501EK8'   => $R501DK8_str,
            'R501FK5'   => $R501DK5_str,
            'R501FK8'   => $R501DK8_str,
            'R501GK5'   => $R501DK5_str,
            'R501GK8'   => $R501DK8_str,
            'R501HK5'   => $R501DK5_str,
            'R501HK8'   => $R501DK8_str,
            'R501IK5'   => $R501DK5_str,
            'R501IK8'   => $R501DK8_str,
            'R501JK5'   => $R501DK5_str,
            'R501JK8'   => $R501DK8_str,
            'R501KK5'   => $R501DK5_str,
            'R501KK8'   => $R501DK8_str,
        ]);

        return redirect()->to(base_url('data/edit5/'.$data_id));
    }

    public function simpan5($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R601AK2'   => $this->request->getPost('R601AK2'),
            'R601AK3'   => $this->request->getPost('R601AK3'),
            'R601AK4'   => $this->request->getPost('R601AK4'),
            'R601AK5'   => $this->request->getPost('R601AK5'),
            'R601BK2'   => $this->request->getPost('R601BK2'),
            'R601BK3'   => $this->request->getPost('R601BK3'),
            'R601BK4'   => $this->request->getPost('R601BK4'),
            'R601BK5'   => $this->request->getPost('R601BK5'),
            'R601CK2'   => $this->request->getPost('R601CK2'),
            'R601CK3'   => $this->request->getPost('R601CK3'),
            'R601CK4'   => $this->request->getPost('R601CK4'),
            'R601CK5'   => $this->request->getPost('R601CK5'),
            'R601DK2'   => $this->request->getPost('R601DK2'),
            'R601DK3'   => $this->request->getPost('R601DK3'),
            'R601DK4'   => $this->request->getPost('R601DK4'),
            'R601DK5'   => $this->request->getPost('R601DK5'),
            'R601EK2'   => $this->request->getPost('R601EK2'),
            'R601EK3'   => $this->request->getPost('R601EK3'),
            'R601EK4'   => $this->request->getPost('R601EK4'),
            'R601EK5'   => $this->request->getPost('R601EK5'),
            'R601FK2'   => $this->request->getPost('R601FK2'),
            'R601FK3'   => $this->request->getPost('R601FK3'),
            'R601FK4'   => $this->request->getPost('R601FK4'),
            'R601FK5'   => $this->request->getPost('R601FK5'),
            'R601GK2'   => $this->request->getPost('R601GK2'),
            'R601GK3'   => $this->request->getPost('R601GK3'),
            'R601GK4'   => $this->request->getPost('R601GK4'),
            'R601GK5'   => $this->request->getPost('R601GK5'),
            'R601HK2'   => $this->request->getPost('R601HK2'),
            'R601HK3'   => $this->request->getPost('R601HK3'),
            'R601HK4'   => $this->request->getPost('R601HK4'),
            'R601HK5'   => $this->request->getPost('R601HK5'),
            'R601IK2'   => $this->request->getPost('R601IK2'),
            'R601IK3'   => $this->request->getPost('R601IK3'),
            'R601IK4'   => $this->request->getPost('R601IK4'),
            'R601IK5'   => $this->request->getPost('R601IK5'),
            'R601JK2'   => $this->request->getPost('R601JK2'),
            'R601JK3'   => $this->request->getPost('R601JK3'),
            'R601JK4'   => $this->request->getPost('R601JK4'),
            'R601JK5'   => $this->request->getPost('R601JK5'),
            'R601KK2'   => $this->request->getPost('R601KK2'),
            'R601KK3'   => $this->request->getPost('R601KK3'),
            'R601KK4'   => $this->request->getPost('R601KK4'),
            'R601KK5'   => $this->request->getPost('R601KK5'),
            'R601LK2'   => $this->request->getPost('R601LK2'),
            'R601LK3'   => $this->request->getPost('R601LK3'),
            'R601MK2'   => $this->request->getPost('R601MK2'),
            'R601MK3'   => $this->request->getPost('R601MK3'),
            'R601NK2'   => $this->request->getPost('R601NK2'),
            'R601NK3'   => $this->request->getPost('R601NK3'),
            'R601OK2'   => $this->request->getPost('R601OK2'),
            'R601OK3'   => $this->request->getPost('R601OK3'),
            'R601PK3'   => $this->request->getPost('R601PK3'),
            'R601QK3'   => $this->request->getPost('R601QK3'),
            'R601R'   => $this->request->getPost('R601R'),
            'R602A'   => $this->request->getPost('R602A'),
            'R602B'   => $this->request->getPost('R602B'),
            'R602C'   => $this->request->getPost('R602C'),
            'R603A'   => $this->request->getPost('R603A'),
            'R603B'   => $this->request->getPost('R603B'),
            'R603C'   => $this->request->getPost('R603C'),
            'R603D'   => $this->request->getPost('R603D'),
            'R603E'   => $this->request->getPost('R603E'),
            'R603F'   => $this->request->getPost('R603F'),
            'R603G'   => $this->request->getPost('R603G'),
            'R604AK2'   => $this->request->getPost('R604AK2'),
            'R604BK2'   => $this->request->getPost('R604BK2'),
            'R604CK2'   => $this->request->getPost('R604CK2'),
            'R604DK2'   => $this->request->getPost('R604DK2'),
            'R604EK2'   => $this->request->getPost('R604EK2'),
            'R604FK2'   => $this->request->getPost('R604FK2'),
            'R604GK2'   => $this->request->getPost('R604GK2'),
            'R604HK2'   => $this->request->getPost('R604HK2'),
            'R604IK2'   => $this->request->getPost('R604IK2'),
            'R604JK2'   => $this->request->getPost('R604JK2'),
            'R604KK2'   => $this->request->getPost('R604KK2'),
            'R604LK2'   => $this->request->getPost('R604LK2'),
            'R604MK2'   => $this->request->getPost('R604MK2'),
            'R605A'   => $this->request->getPost('R605A'),
            'R605B'   => $this->request->getPost('R605B'),
            'R605C'   => $this->request->getPost('R605C'),
            'R605D'   => $this->request->getPost('R605D'),
            'R605E'   => $this->request->getPost('R605E'),
            'R606A1'   => $this->request->getPost('R606A1'),
            'R606A1S'   => $this->request->getPost('R606A1S'),
            'R606A2'   => $this->request->getPost('R606A2'),
            'R606A2S'   => $this->request->getPost('R606A2S'),
            'R606B'   => $this->request->getPost('R606B'),
            'R606BS'   => $this->request->getPost('R606BS'),
            'R606C'   => $this->request->getPost('R606C'),
            'R606CS'   => $this->request->getPost('R606CS'),
            'R606D'   => $this->request->getPost('R606D'),
            'R606DS'   => $this->request->getPost('R606DS'),
            'R607'   => $this->request->getPost('R607'),
            'R608'   => $this->request->getPost('R608'),
            'R609'   => $this->request->getPost('R609'),
            'R610'   => $this->request->getPost('R610'),
            'R611AK2'   => $this->request->getPost('R611AK2'),
            'R611AK3'   => $this->request->getPost('R611AK3'),
            'R611AK4'   => $this->request->getPost('R611AK4'),
            'R611BK2'   => $this->request->getPost('R611BK2'),
            'R611BK3'   => $this->request->getPost('R611BK3'),
            'R611BK4'   => $this->request->getPost('R611BK4'),
            'R611CK2'   => $this->request->getPost('R611CK2'),
            'R611CK3'   => $this->request->getPost('R611CK3'),
            'R611CK4'   => $this->request->getPost('R611CK4'),
            'R611DK2'   => $this->request->getPost('R611DK2'),
            'R611DK3'   => $this->request->getPost('R611DK3'),
            'R611DK4'   => $this->request->getPost('R611DK4'),
            'R611EK2'   => $this->request->getPost('R611EK2'),
            'R611EK3'   => $this->request->getPost('R611EK3'),
            'R611EK4'   => $this->request->getPost('R611EK4'),
            'R611FK2'   => $this->request->getPost('R611FK2'),
            'R611FK3'   => $this->request->getPost('R611FK3'),
            'R611FK4'   => $this->request->getPost('R611FK4'),
            'R611GK2'   => $this->request->getPost('R611GK2'),
            'R611GK3'   => $this->request->getPost('R611GK3'),
            'R611GK4'   => $this->request->getPost('R611GK4'),
            'R611HK2'   => $this->request->getPost('R611HK2'),
            'R611HK3'   => $this->request->getPost('R611HK3'),
            'R611HK4'   => $this->request->getPost('R611HK4'),
            'R611IK2'   => $this->request->getPost('R611IK2'),
            'R611IK3'   => $this->request->getPost('R611IK3'),
            'R611IK4'   => $this->request->getPost('R611IK4'),
            'R611JK2'   => $this->request->getPost('R611JK2'),
            'R611JK3'   => $this->request->getPost('R611JK3'),
            'R611JK4'   => $this->request->getPost('R611JK4'),
            'R601AK2'   => $this->request->getPost('R601AK2'),
            'R601AK2S'   => $this->request->getPost('R601AK2S'),
            'R601AK3S'   => $this->request->getPost('R601AK3S'),
            'R601BK2S'   => $this->request->getPost('R601BK2S'),
            'R601BK3S'   => $this->request->getPost('R601BK3S'),
            'R601CK2S'   => $this->request->getPost('R601CK2S'),
            'R601CK3S'   => $this->request->getPost('R601CK3S'),
            'R601DK2S'   => $this->request->getPost('R601DK2S'),
            'R601DK3S'   => $this->request->getPost('R601DK3S'),
            'R601EK2S'   => $this->request->getPost('R601EK2S'),
            'R601EK3S'   => $this->request->getPost('R601EK3S'),
            'R601FK2S'   => $this->request->getPost('R601FK2S'),
            'R601FK3S'   => $this->request->getPost('R601FK3S'),
            'R601GK2S'   => $this->request->getPost('R601GK2S'),
            'R601GK3S'   => $this->request->getPost('R601GK3S'),
            'R601HK2S'   => $this->request->getPost('R601HK2S'),
            'R601HK3S'   => $this->request->getPost('R601HK3S'),
            'R601IK2S'   => $this->request->getPost('R601IK2S'),
            'R601IK3S'   => $this->request->getPost('R601IK3S'),
            'R601JK2S'   => $this->request->getPost('R601JK2S'),
            'R601JK3S'   => $this->request->getPost('R601JK3S'),
            'R601KK2S'   => $this->request->getPost('R601KK2S'),
            'R601KK3S'   => $this->request->getPost('R601KK3S'),
            'R601LK2S'   => $this->request->getPost('R601LK2S'),
            'R601LK3S'   => $this->request->getPost('R601LK3S'),
            'R601MK2S'   => $this->request->getPost('R601MK2S'),
            'R601MK3S'   => $this->request->getPost('R601MK3S'),
            'R601NK2S'   => $this->request->getPost('R601NK2S'),
            'R601NK3S'   => $this->request->getPost('R601NK3S'),
            'R601OK2S'   => $this->request->getPost('R601OK2S'),
            'R601OK3S'   => $this->request->getPost('R601OK3S'),
            'R601PK3S'   => $this->request->getPost('R601PK3S'),
            'R601QK3S'   => $this->request->getPost('R601QK3S'),
            'R604AK2S'   => $this->request->getPost('R604AK2S'),
            'R604BK2S'   => $this->request->getPost('R604BK2S'),
            'R604CK2S'   => $this->request->getPost('R604CK2S'),
            'R604DK2S'   => $this->request->getPost('R604DK2S'),
            'R604EK2S'   => $this->request->getPost('R604EK2S'),
            'R604FK2S'   => $this->request->getPost('R604FK2S'),
            'R604GK2S'   => $this->request->getPost('R604GK2S'),
            'R604HK2S'   => $this->request->getPost('R604HK2S'),
            'R604IK2S'   => $this->request->getPost('R604IK2S'),
            'R604JK2S'   => $this->request->getPost('R604JK2S'),
            'R604KK2S'   => $this->request->getPost('R604KK2S'),
            'R604LK2S'   => $this->request->getPost('R604LK2S'),
            'R604MK2S'   => $this->request->getPost('R604MK2S')
        ]);

        return redirect()->to(base_url('data/edit6/'.$data_id));
    }

    public function simpan6($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R701_1'   => $this->request->getPost('R701_1'),
            'R701_2'   => $this->request->getPost('R701_2'),
            'R701_3'   => $this->request->getPost('R701_3'),
            'R701_4'   => $this->request->getPost('R701_4'),
            'R701_5'   => $this->request->getPost('R701_5'),
            'R701_6'   => $this->request->getPost('R701_6'),
            'R701_7'   => $this->request->getPost('R701_7'),
            'R702'   => $this->request->getPost('R702'),
            'R703A'   => $this->request->getPost('R703A'),
            'R703B'   => $this->request->getPost('R703B'),
            'R703C'   => $this->request->getPost('R703C'),
            'R703D'   => $this->request->getPost('R703D'),
            'R703E'   => $this->request->getPost('R703E'),
            'R703F'   => $this->request->getPost('R703F'),
            'R703G'   => $this->request->getPost('R703G'),
            'R703H'   => $this->request->getPost('R703H'),
            'R703I'   => $this->request->getPost('R703I'),
            'R703J'   => $this->request->getPost('R703J'),
            'R704A'   => $this->request->getPost('R704A'),
            'R704B'   => $this->request->getPost('R704B'),
            'R705A'   => $this->request->getPost('R705A'),
            'R705B'   => $this->request->getPost('R705B'),
            'R705C'   => $this->request->getPost('R705C'),
            'R705D'   => $this->request->getPost('R705D'),
            'R705E'   => $this->request->getPost('R705E'),
            'R705F'   => $this->request->getPost('R705F'),
            'R705G'   => $this->request->getPost('R705G'),
            'R705H'   => $this->request->getPost('R705H'),
            'R705I'   => $this->request->getPost('R705I'),
            'R706'   => $this->request->getPost('R706'),
            'R707'   => $this->request->getPost('R707'),
            'R707S'   => $this->request->getPost('R707S'),
            'R708A'   => $this->request->getPost('R708A'),
            'R708AS'   => $this->request->getPost('R708AS'),
            'R708B'   => $this->request->getPost('R708B'),
            'R708BS'   => $this->request->getPost('R708BS'),
            'R708C'   => $this->request->getPost('R708C'),
            'R708CS'   => $this->request->getPost('R708CS'),
            'R708D'   => $this->request->getPost('R708D'),
            'R708DS'   => $this->request->getPost('R708DS'),
            'R708E'   => $this->request->getPost('R708E'),
            'R708ES'   => $this->request->getPost('R708ES'),
            'R708F'   => $this->request->getPost('R708F'),
            'R708FS'   => $this->request->getPost('R708FS'),
            'R801AK2'   => $this->request->getPost('R801AK2'),
            'R801AK3'   => $this->request->getPost('R801AK3'),
            'R801AK4'   => $this->request->getPost('R801AK4'),
            'R801BK2'   => $this->request->getPost('R801BK2'),
            'R801BK3'   => $this->request->getPost('R801BK3'),
            'R801BK4'   => $this->request->getPost('R801BK4'),
            'R801CK2'   => $this->request->getPost('R801CK2'),
            'R801CK3'   => $this->request->getPost('R801CK3'),
            'R801CK4'   => $this->request->getPost('R801CK4'),
            'R801DK2'   => $this->request->getPost('R801DK2'),
            'R801DK3'   => $this->request->getPost('R801DK3'),
            'R801DK4'   => $this->request->getPost('R801DK4'),
            'R801EK2'   => $this->request->getPost('R801EK2'),
            'R801EK3'   => $this->request->getPost('R801EK3'),
            'R801EK4'   => $this->request->getPost('R801EK4'),
            'R801FK2'   => $this->request->getPost('R801FK2'),
            'R801FK3'   => $this->request->getPost('R801FK3'),
            'R801FK4'   => $this->request->getPost('R801FK4'),
            'R801GK2'   => $this->request->getPost('R801GK2'),
            'R801GK3'   => $this->request->getPost('R801GK3'),
            'R801GK4'   => $this->request->getPost('R801GK4'),
            'R801HK2'   => $this->request->getPost('R801HK2'),
            'R801HK3'   => $this->request->getPost('R801HK3'),
            'R801HK4'   => $this->request->getPost('R801HK4'),
            'R801IK2'   => $this->request->getPost('R801IK2'),
            'R801IK3'   => $this->request->getPost('R801IK3'),
            'R801IK4'   => $this->request->getPost('R801IK4'),
            'R801JK2'   => $this->request->getPost('R801JK2'),
            'R801JK3'   => $this->request->getPost('R801JK3'),
            'R801JK4'   => $this->request->getPost('R801JK4'),
            'R801KK2'   => $this->request->getPost('R801KK2'),
            'R801KK3'   => $this->request->getPost('R801KK3'),
            'R801KK4'   => $this->request->getPost('R801KK4'),
            'R801LK2'   => $this->request->getPost('R801LK2'),
            'R801LK3'   => $this->request->getPost('R801LK3'),
            'R801LK4'   => $this->request->getPost('R801LK4'),
            'R802'   => $this->request->getPost('R802'),
            'R803'   => $this->request->getPost('R803'),
            'R803S'   => $this->request->getPost('R803S'),
        ]);

        return redirect()->to(base_url('data/edit7/'.$data_id));
    }

    public function simpan7($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R901A1'   => $this->request->getPost('R901A1'),
            'R901A2'   => $this->request->getPost('R901A2'),
            'R901B'   => $this->request->getPost('R901B'),
            'R901C'   => $this->request->getPost('R901C'),
            'R1001A'   => $this->request->getPost('R1001A'),
            'R1001B'   => $this->request->getPost('R1001B'),
            'R1001C'   => $this->request->getPost('R1001C'),
            'R1001D'   => $this->request->getPost('R1001D'),
            'R1001E'   => $this->request->getPost('R1001E'),
            'R1001F'   => $this->request->getPost('R1001F'),
            'R1001G'   => $this->request->getPost('R1001G'),
            'R1001H'   => $this->request->getPost('R1001H'),
            'R1001I'   => $this->request->getPost('R1001I'),
            'R1001J'   => $this->request->getPost('R1001J'),
            'R1001K'   => $this->request->getPost('R1001K'),
            'R1001L'   => $this->request->getPost('R1001L'),
            'R1001M'   => $this->request->getPost('R1001M'),
            'R1001N'   => $this->request->getPost('R1001N'),
            'R1001O'   => $this->request->getPost('R1001O'),
            'R1001P'   => $this->request->getPost('R1001P'),
            'R1002'   => $this->request->getPost('R1002'),
            'R1003'   => $this->request->getPost('R1003'),
            'R1004A1'   => $this->request->getPost('R1004A1'),
            'R1004A2'   => $this->request->getPost('R1004A2'),
            'R1004A3'   => $this->request->getPost('R1004A3'),
            'R1005A1'   => $this->request->getPost('R1005A1'),
            'R1005A2'   => $this->request->getPost('R1005A2'),
            'R1005A3'   => $this->request->getPost('R1005A3'),
            'R1005A4'   => $this->request->getPost('R1005A4'),
            'R1006AK2'   => $this->request->getPost('R1006AK2'),
            'R1006AK3'   => $this->request->getPost('R1006AK3'),
            'R1006AK4'   => $this->request->getPost('R1006AK4'),
            'R1006BK2'   => $this->request->getPost('R1006BK2'),
            'R1006BK3'   => $this->request->getPost('R1006BK3'),
            'R1006BK4'   => $this->request->getPost('R1006BK4'),
            'R1006CK2'   => $this->request->getPost('R1006CK2'),
            'R1006CK3'   => $this->request->getPost('R1006CK3'),
            'R1006CK4'   => $this->request->getPost('R1006CK4'),
            'R1006DK2'   => $this->request->getPost('R1006DK2'),
            'R1006DK3'   => $this->request->getPost('R1006DK3'),
            'R1006DK4'   => $this->request->getPost('R1006DK4'),
            'R1006EK2'   => $this->request->getPost('R1006EK2'),
            'R1006EK3'   => $this->request->getPost('R1006EK3'),
            'R1006EK4'   => $this->request->getPost('R1006EK4'),
            'R1006FK2'   => $this->request->getPost('R1006FK2'),
            'R1006FK3'   => $this->request->getPost('R1006FK3'),
            'R1006FK4'   => $this->request->getPost('R1006FK4'),
            'R1006GK2'   => $this->request->getPost('R1006GK2'),
            'R1006GK3'   => $this->request->getPost('R1006GK3'),
            'R1006GK4'   => $this->request->getPost('R1006GK4'),
            'R1006HK2'   => $this->request->getPost('R1006HK2'),
            'R1006HK3'   => $this->request->getPost('R1006HK3'),
            'R1006HK4'   => $this->request->getPost('R1006HK4'),
            'R1006IK2'   => $this->request->getPost('R1006IK2'),
            'R1006IK3'   => $this->request->getPost('R1006IK3'),
            'R1006IK4'   => $this->request->getPost('R1006IK4'),
            'R1007AK2'   => $this->request->getPost('R1007AK2'),
            'R1007AK3'   => $this->request->getPost('R1007AK3'),
            'R1007AK4'   => $this->request->getPost('R1007AK4'),
            'R1007BK2'   => $this->request->getPost('R1007BK2'),
            'R1007BK3'   => $this->request->getPost('R1007BK3'),
            'R1007BK4'   => $this->request->getPost('R1007BK4'),
            'R1007CK2'   => $this->request->getPost('R1007CK2'),
            'R1007CK3'   => $this->request->getPost('R1007CK3'),
            'R1007CK4'   => $this->request->getPost('R1007CK4'),
            'R1007DK2'   => $this->request->getPost('R1007DK2'),
            'R1007DK3'   => $this->request->getPost('R1007DK3'),
            'R1007DK4'   => $this->request->getPost('R1007DK4'),
            'R1007EK2'   => $this->request->getPost('R1007EK2'),
            'R1007EK3'   => $this->request->getPost('R1007EK3'),
            'R1007EK4'   => $this->request->getPost('R1007EK4'),
            'R1007FK2'   => $this->request->getPost('R1007FK2'),
            'R1007FK3'   => $this->request->getPost('R1007FK3'),
            'R1007FK4'   => $this->request->getPost('R1007FK4'),
            'R1007GK2'   => $this->request->getPost('R1007GK2'),
            'R1007GK3'   => $this->request->getPost('R1007GK3'),
            'R1007GK4'   => $this->request->getPost('R1007GK4'),
            'R1007HK2'   => $this->request->getPost('R1007HK2'),
            'R1007HK3'   => $this->request->getPost('R1007HK3'),
            'R1007HK4'   => $this->request->getPost('R1007HK4'),
            'R1007IK2'   => $this->request->getPost('R1007IK2'),
            'R1007IK3'   => $this->request->getPost('R1007IK3'),
            'R1007IK4'   => $this->request->getPost('R1007IK4'),
            'R1007JK2'   => $this->request->getPost('R1007JK2'),
            'R1007JK3'   => $this->request->getPost('R1007JK3'),
            'R1007JK4'   => $this->request->getPost('R1007JK4')
        ]);

        return redirect()->to(base_url('data/edit8/'.$data_id));
    }

    public function simpan8($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R110301K3'   => $this->request->getPost('R110301K3'),
            'R110301K4'   => $this->request->getPost('R110301K4'),
            'R110302K3'   => $this->request->getPost('R110302K3'),
            'R110302K4'   => $this->request->getPost('R110302K4'),
            'R110303K3'   => $this->request->getPost('R110303K3'),
            'R110303K4'   => $this->request->getPost('R110303K4'),
            'R110304K3'   => $this->request->getPost('R110304K3'),
            'R110304K4'   => $this->request->getPost('R110304K4'),
            'R110305K3'   => $this->request->getPost('R110305K3'),
            'R110305K4'   => $this->request->getPost('R110305K4'),
            'R110306K3'   => $this->request->getPost('R110306K3'),
            'R110306K4'   => $this->request->getPost('R110306K4'),
            'R110307K3'   => $this->request->getPost('R110307K3'),
            'R110307K4'   => $this->request->getPost('R110307K4'),
            'R110308K3'   => $this->request->getPost('R110308K3'),
            'R110308K4'   => $this->request->getPost('R110308K4'),
            'R110309K3'   => $this->request->getPost('R110309K3'),
            'R110309K4'   => $this->request->getPost('R110309K4'),
            'R110310K3'   => $this->request->getPost('R110310K3'),
            'R110310K4'   => $this->request->getPost('R110310K4'),
            'R110311K3'   => $this->request->getPost('R110311K3'),
            'R110311K4'   => $this->request->getPost('R110311K4'),
            'R1102'   => $this->request->getPost('R1102'),
            'R1103'   => $this->request->getPost('R1103'),
            'R1103S'   => $this->request->getPost('R1103S'),
            'R1104AK2'   => $this->request->getPost('R1104AK2'),
            'R1104AK3'   => $this->request->getPost('R1104AK3'),
            'R1104BK2'   => $this->request->getPost('R1104BK2'),
            'R1104BK3'   => $this->request->getPost('R1104BK3'),
            'R1201A'   => $this->request->getPost('R1201A'),
            'R1201B'   => $this->request->getPost('R1201B'),
            'R1201C'   => $this->request->getPost('R1201C'),
            'R1201D'   => $this->request->getPost('R1201D'),
            'R1201E'   => $this->request->getPost('R1201E'),
            'R1201F'   => $this->request->getPost('R1201F'),
            'R1201G'   => $this->request->getPost('R1201G'),
            'R1201H'   => $this->request->getPost('R1201H'),
            'R1201I'   => $this->request->getPost('R1201I'),
            'R1202A1'   => $this->request->getPost('R1202A1'),
            'R1202B'   => $this->request->getPost('R1202B'),
            'R1202C'   => $this->request->getPost('R1202C'),
            'R1202D'   => $this->request->getPost('R1202D'),
            'R1203A'   => $this->request->getPost('R1203A'),
            'R1203B'   => $this->request->getPost('R1203B'),
            'R1204'   => $this->request->getPost('R1204'),
            'R1204S'   => $this->request->getPost('R1204S'),
            'R1205A'   => $this->request->getPost('R1205A'),
            'R1205AS'   => $this->request->getPost('R1205AS'),
            'R1205B'   => $this->request->getPost('R1205B')
        ]);

        return redirect()->to(base_url('data/edit9/'.$data_id));
    }

    public function simpan9($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R1301AK2'   => $this->request->getPost('R1301AK2'),
            'R1301AK3'   => $this->request->getPost('R1301AK3'),
            'R1301AK4'   => $this->request->getPost('R1301AK4'),
            'R1301AK5'   => $this->request->getPost('R1301AK5'),
            'R1301BK2'   => $this->request->getPost('R1301BK2'),
            'R1301BK3'   => $this->request->getPost('R1301BK3'),
            'R1301BK4'   => $this->request->getPost('R1301BK4'),
            'R1301BK5'   => $this->request->getPost('R1301BK5'),
            'R1301CK2'   => $this->request->getPost('R1301CK2'),
            'R1301CK3'   => $this->request->getPost('R1301CK3'),
            'R1301CK4'   => $this->request->getPost('R1301CK4'),
            'R1301CK5'   => $this->request->getPost('R1301CK5'),
            'R1302_1'   => $this->request->getPost('R1302_1'),
            'R1302_1A'   => $this->request->getPost('R1302_1A'),
            'R1302_1B'   => $this->request->getPost('R1302_1B'),
            'R1302_1C'   => $this->request->getPost('R1302_1C'),
            'R1302_1D'   => $this->request->getPost('R1302_1D'),
            'R1302_2'   => $this->request->getPost('R1302_2'),
            'R1302_3'   => $this->request->getPost('R1302_3'),
            'R1302_4'   => $this->request->getPost('R1302_4'),
            'R1302_5'   => $this->request->getPost('R1302_5'),
            'R1302_6'   => $this->request->getPost('R1302_6'),
            'R1302_7'   => $this->request->getPost('R1302_7'),
            'R1302_8'   => $this->request->getPost('R1302_8'),
            'R1302_9'   => $this->request->getPost('R1302_9'),
            'R1302_10'   => $this->request->getPost('R1302_10'),
            'R1302_11'   => $this->request->getPost('R1302_11'),
            'R1303A'   => $this->request->getPost('R1303A'),
            'R1303B'   => $this->request->getPost('R1303B'),
            'R1303C'   => $this->request->getPost('R1303C'),
            'R1304A'   => $this->request->getPost('R1304A'),
            'R1304B'   => $this->request->getPost('R1304B'),
            'R1304C'   => $this->request->getPost('R1304C')
        ]);

        return redirect()->to(base_url('data/edit10/'.$data_id));
    }

    public function simpan10($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R1401AK2'   => $this->request->getPost('R1401AK2'),
            'R1401AK2S'  => $this->request->getPost('R1401AK2S'),
            'R1401AK3'   => $this->request->getPost('R1401AK3'),
            'R1401AK4'   => $this->request->getPost('R1401AK4'),
            'R1401AK5'   => $this->request->getPost('R1401AK5'),
            'R1401AK6'   => $this->request->getPost('R1401AK6'),
            'R1401BK2'   => $this->request->getPost('R1401BK2'),
            'R1401BK2S'  => $this->request->getPost('R1401BK2S'),
            'R1401BK3'   => $this->request->getPost('R1401BK3'),
            'R1401BK4'   => $this->request->getPost('R1401BK4'),
            'R1401BK5'   => $this->request->getPost('R1401BK5'),
            'R1401BK6'   => $this->request->getPost('R1401BK6'),
            'R1402A'     => $this->request->getPost('R1402A'),
            'R1402A1'    => $this->request->getPost('R1402A1'),
            'R1402B'     => $this->request->getPost('R1402B'),
            'R1402B1'    => $this->request->getPost('R1402B1'),
            'R1402C'     => $this->request->getPost('R1402C'),
            'R1402C1'    => $this->request->getPost('R1402C1'),
            'R1402D'     => $this->request->getPost('R1402D'),
            'R1402D1'    => $this->request->getPost('R1402D1'),
            'R1403'      => $this->request->getPost('R1403'),
            'R1404A'     => $this->request->getPost('R1404A'),
            'R1404B'     => $this->request->getPost('R1404B'),
            'R1404C'     => $this->request->getPost('R1404C'),
            'R1404D'     => $this->request->getPost('R1404D')
        ]);

        return redirect()->to(base_url('data_prospera'));
    }

    public function delete($data_id)
    {

        $data = $this->dataModel->find($data_id);

        if($data) {
            $this->dataModel->delete($data_id);

            //flash message
            session()->setFlashdata('message', 'Data Berhasil Dihapus');

            return redirect()->to(base_url('data_prospera'));
        }
    }
}
