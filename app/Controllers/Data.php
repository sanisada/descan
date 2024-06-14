<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\data_model;
use App\Models\kec_model;
use App\Models\desa_model;
use App\Models\ques_model;
use App\Models\sls_model;

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

        $data = array(
                'datas' => $this->dataModel->getAll(),
                'pager' => $this->dataModel->pager
            );

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
            'sls' => $this->slsModel->getSlsByDesaId($data_id),
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
                . view('data/create3', $data)
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
                . view('data/create4', $data)
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
                . view('data/create5', $data)
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
                . view('data/create6', $data)
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
                . view('data/create7', $data)
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
                . view('data/create8', $data)
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
                . view('data/create9', $data)
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
                . view('data/create10', $data)
                . view('templates/footer');
    }

    public function create11($data_id)
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
                . view('data/create11', $data)
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

        return redirect()->to(base_url('data/create2/'.$data_id));
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
            'R401A'   => $this->request->getPost('R401A'),
            'R401B'   => $this->request->getPost('R401B'),
            'R401C'   => $this->request->getPost('R401C'),
            'R401D'   => $this->request->getPost('R401D'),
            'R402B1'   => $this->request->getPost('R402B1'),
            'R402B2'   => $this->request->getPost('R402B2'),
            'R402E'   => $this->request->getPost('R402E'),
            'R402E1'   => $this->request->getPost('R402E1'),
            'R402E2'   => $this->request->getPost('R402E2'),
            'R403A1'   => $this->request->getPost('R403A1'),
            'R403A2'   => $this->request->getPost('R403A2'),
            'R403A3'   => $this->request->getPost('R403A3'),
            'R403A4'   => $this->request->getPost('R403A4'),
            'R403A5'   => $this->request->getPost('R403A5'),
            'R403A6'   => $this->request->getPost('R403A6'),
            'R403A7'   => $this->request->getPost('R403A7'),
            'R403A8'   => $this->request->getPost('R403A8'),
            'R403A9'   => $this->request->getPost('R403A9'),
            'R403A10'   => $this->request->getPost('R403A10'),
            'R403A11'   => $this->request->getPost('R403A11'),
            'R403A12'   => $this->request->getPost('R403A12'),
            'R403A13'   => $this->request->getPost('R403A13'),
            'R403A14'   => $this->request->getPost('R403A14'),
            'R403A15'   => $this->request->getPost('R403A15'),
            'R403A16'   => $this->request->getPost('R403A16'),
            'R403A17'   => $this->request->getPost('R403A17'),
            'R403A18'   => $this->request->getPost('R403A18'),
            'R403A19'   => $this->request->getPost('R403A19'),
            'R403A20'   => $this->request->getPost('R403A20'),
            'R403A21'   => $this->request->getPost('R403A21'),
            'R403B1'   => $this->request->getPost('R403B1'),
            'R403B2'   => $this->request->getPost('R403B2')
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
            'R501A1'   => $this->request->getPost('R501A1'),
            'R501A2'   => $this->request->getPost('R501A2'),
            'R501B'   => $this->request->getPost('R501B'),
            'R504C'   => $this->request->getPost('R504C'),
            'R504C1'   => $this->request->getPost('R504C1'),
            'R509A'   => $this->request->getPost('R509A'),
            'R509B'   => $this->request->getPost('R509B'),
            'R509C1'   => $this->request->getPost('R509C1'),
            'R509C1A'   => $this->request->getPost('R509C1A'),
            'R509C2'   => $this->request->getPost('R509C2'),
            'R509C3'   => $this->request->getPost('R509C3'),
            'R509AK2'   => $this->request->getPost('R509AK2'),
            'R509AK3'   => $this->request->getPost('R509AK3'),
            'R509AK4'   => $this->request->getPost('R509AK4'),
            'R509AK5'   => $this->request->getPost('R509AK5'),
            'R510B1K2'   => $this->request->getPost('R510B1K2'),
            'R510B1K3'   => $this->request->getPost('R510B1K3'),
            'R510B1K4'   => $this->request->getPost('R510B1K4'),
            'R510B1K5'   => $this->request->getPost('R510B1K5'),
            'R510B2K2'   => $this->request->getPost('R510B2K2'),
            'R510B2K3'   => $this->request->getPost('R510B2K3'),
            'R510B2K4'   => $this->request->getPost('R510B2K4'),
            'R510B2K5'   => $this->request->getPost('R510B2K5'),
            'R510B3K2'   => $this->request->getPost('R510B3K2'),
            'R510B3K3'   => $this->request->getPost('R510B3K3'),
            'R510B3K4'   => $this->request->getPost('R510B3K4'),
            'R510B3K5'   => $this->request->getPost('R510B3K5'),
            'R510B4K2'   => $this->request->getPost('R510B4K2'),
            'R510B4K3'   => $this->request->getPost('R510B4K3'),
            'R510B4K4'   => $this->request->getPost('R510B4K4'),
            'R510B4K5'   => $this->request->getPost('R510B4K5'),
            'R510B5K2'   => $this->request->getPost('R510B5K2'),
            'R510B5K3'   => $this->request->getPost('R510B5K3'),
            'R510B5K4'   => $this->request->getPost('R510B5K4'),
            'R510B5K5'   => $this->request->getPost('R510B5K5'),
            'R510B6K2'   => $this->request->getPost('R510B6K2'),
            'R510B6K3'   => $this->request->getPost('R510B6K3'),
            'R510B6K4'   => $this->request->getPost('R510B6K4'),
            'R510B6K5'   => $this->request->getPost('R510B6K5'),
            'R510B7K2'   => $this->request->getPost('R510B7K2'),
            'R510B7K3'   => $this->request->getPost('R510B7K3'),
            'R510B7K4'   => $this->request->getPost('R510B7K4'),
            'R510B7K5'   => $this->request->getPost('R510B7K5'),
            'R510B8K2'   => $this->request->getPost('R510B8K2'),
            'R510B8K3'   => $this->request->getPost('R510B8K3'),
            'R510B8K4'   => $this->request->getPost('R510B8K4'),
            'R510B8K5'   => $this->request->getPost('R510B8K5'),
            'R510B9K2'   => $this->request->getPost('R510B9K2'),
            'R510B9K3'   => $this->request->getPost('R510B9K3'),
            'R510B9K4'   => $this->request->getPost('R510B9K4'),
            'R510B9K5'   => $this->request->getPost('R510B9K5'),
            'R510B10K2'   => $this->request->getPost('R510B10K2'),
            'R510B10K3'   => $this->request->getPost('R510B10K3'),
            'R510B10K4'   => $this->request->getPost('R510B10K4'),
            'R510B10K5'   => $this->request->getPost('R510B10K5'),
            'R511A'   => $this->request->getPost('R511A'),
            'R511B1'   => $this->request->getPost('R511B1'),
            'R511B2'   => $this->request->getPost('R511B2'),
            'R511B3'   => $this->request->getPost('R511B3'),
            'R513A'   => $this->request->getPost('R513A'),
            'R513B1'   => $this->request->getPost('R513B1'),
            'R513B2'   => $this->request->getPost('R513B2'),
            'R513B3'   => $this->request->getPost('R513B3'),
            'R516'   => $this->request->getPost('R516'),
            'R516A'   => $this->request->getPost('R516A'),
            'R518'   => $this->request->getPost('R518'),
            'R518A'   => $this->request->getPost('R518A')
        ]);

        return redirect()->to(base_url('data/create4/'.$data_id));
    }

    public function save4($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();

        $R601AK5 = $this->request->getPost('R601AK5');
        $R601AK8 = $this->request->getPost('R601AK8');
        $R601BK5 = $this->request->getPost('R601BK5');
        $R601BK8 = $this->request->getPost('R601BK8');
        $R601CK5 = $this->request->getPost('R601CK5');
        $R601CK8 = $this->request->getPost('R601CK8');
        $R601DK5 = $this->request->getPost('R601DK5');
        $R601DK8 = $this->request->getPost('R601DK8');
        $R601EK5 = $this->request->getPost('R601EK5');
        $R601EK8 = $this->request->getPost('R601EK8');
        $R601FK5 = $this->request->getPost('R601FK5');
        $R601FK8 = $this->request->getPost('R601FK8');
        $R601GK5 = $this->request->getPost('R601GK5');
        $R601GK8 = $this->request->getPost('R601GK8');
        $R601HK5 = $this->request->getPost('R601HK5');
        $R601HK8 = $this->request->getPost('R601HK8');
        $R601IK5 = $this->request->getPost('R601IK5');
        $R601IK8 = $this->request->getPost('R601IK8');
        $R601JK5 = $this->request->getPost('R601JK5');
        $R601JK8 = $this->request->getPost('R601JK8');
        $R601KK5 = $this->request->getPost('R601KK5');
        $R601KK8 = $this->request->getPost('R601KK8');

        // Ubah array menjadi string
        $R601AK5_str = is_array($R601AK5) ? implode(',', $R601AK5) : '';
        $R601AK8_str = is_array($R601AK8) ? implode(',', $R601AK8) : '';
        $R601BK5_str = is_array($R601BK5) ? implode(',', $R601BK5) : '';
        $R601BK8_str = is_array($R601BK8) ? implode(',', $R601BK8) : '';
        $R601CK5_str = is_array($R601CK5) ? implode(',', $R601CK5) : '';
        $R601CK8_str = is_array($R601CK8) ? implode(',', $R601CK8) : '';
        $R601DK5_str = is_array($R601DK5) ? implode(',', $R601DK5) : '';
        $R601DK8_str = is_array($R601DK8) ? implode(',', $R601DK8) : '';
        $R601EK5_str = is_array($R601EK5) ? implode(',', $R601EK5) : '';
        $R601EK8_str = is_array($R601EK8) ? implode(',', $R601EK8) : '';
        $R601FK5_str = is_array($R601FK5) ? implode(',', $R601FK5) : '';
        $R601FK8_str = is_array($R601FK8) ? implode(',', $R601FK8) : '';
        $R601GK5_str = is_array($R601GK5) ? implode(',', $R601GK5) : '';
        $R601GK8_str = is_array($R601GK8) ? implode(',', $R601GK8) : '';
        $R601HK5_str = is_array($R601HK5) ? implode(',', $R601HK5) : '';
        $R601HK8_str = is_array($R601HK8) ? implode(',', $R601HK8) : '';
        $R601IK5_str = is_array($R601IK5) ? implode(',', $R601IK5) : '';
        $R601IK8_str = is_array($R601IK8) ? implode(',', $R601IK8) : '';
        $R601JK5_str = is_array($R601JK5) ? implode(',', $R601JK5) : '';
        $R601JK8_str = is_array($R601JK8) ? implode(',', $R601JK8) : '';
        $R601KK5_str = is_array($R601KK5) ? implode(',', $R601KK5) : '';
        $R601KK8_str = is_array($R601KK8) ? implode(',', $R601KK8) : '';


        //insert data into database
        $dataModel->update($data_id, [
            'R601AK2'   => $this->request->getPost('R601AK2'),
            'R601AK3'   => $this->request->getPost('R601AK3'),
            'R601AK4'   => $this->request->getPost('R601AK4'),
            'R601AK5'   => $R601AK5_str,
            'R601AK6'   => $this->request->getPost('R601AK6'),
            'R601AK7'   => $this->request->getPost('R601AK7'),
            'R601AK8'   => $R601AK8_str,
            'R601BK2'   => $this->request->getPost('R601BK2'),
            'R601BK3'   => $this->request->getPost('R601BK3'),
            'R601BK4'   => $this->request->getPost('R601BK4'),
            'R601BK5'   => $R601BK5_str,
            'R601BK6'   => $this->request->getPost('R601BK6'),
            'R601BK7'   => $this->request->getPost('R601BK7'),
            'R601BK8'   => $R601BK8_str,
            'R601CK2'   => $this->request->getPost('R601CK2'),
            'R601CK3'   => $this->request->getPost('R601CK3'),
            'R601CK4'   => $this->request->getPost('R601CK4'),
            'R601CK5'   => $R601CK5_str,
            'R601CK6'   => $this->request->getPost('R601CK6'),
            'R601CK7'   => $this->request->getPost('R601CK7'),
            'R601CK8'   => $R601CK8_str,
            'R601DK2'   => $this->request->getPost('R601DK2'),
            'R601DK3'   => $this->request->getPost('R601DK3'),
            'R601DK4'   => $this->request->getPost('R601DK4'),
            'R601DK5'   => $R601DK5_str,
            'R601DK6'   => $this->request->getPost('R601DK6'),
            'R601DK7'   => $this->request->getPost('R601DK7'),
            'R601DK8'   => $R601DK8_str,
            'R601EK2'   => $this->request->getPost('R601EK2'),
            'R601EK3'   => $this->request->getPost('R601EK3'),
            'R601EK4'   => $this->request->getPost('R601EK4'),
            'R601EK5'   => $R601DK5_str,
            'R601EK6'   => $this->request->getPost('R601EK6'),
            'R601EK7'   => $this->request->getPost('R601EK7'),
            'R601EK8'   => $R601DK8_str,
            'R601FK2'   => $this->request->getPost('R601FK2'),
            'R601FK3'   => $this->request->getPost('R601FK3'),
            'R601FK4'   => $this->request->getPost('R601FK4'),
            'R601FK5'   => $R601DK5_str,
            'R601FK6'   => $this->request->getPost('R601FK6'),
            'R601FK7'   => $this->request->getPost('R601FK7'),
            'R601FK8'   => $R601DK8_str,
            'R601GK2'   => $this->request->getPost('R601GK2'),
            'R601GK3'   => $this->request->getPost('R601GK3'),
            'R601GK4'   => $this->request->getPost('R601GK4'),
            'R601GK5'   => $R601DK5_str,
            'R601GK6'   => $this->request->getPost('R601GK6'),
            'R601GK7'   => $this->request->getPost('R601GK7'),
            'R601GK8'   => $R601DK8_str,
            'R601HK2'   => $this->request->getPost('R601HK2'),
            'R601HK3'   => $this->request->getPost('R601HK3'),
            'R601HK4'   => $this->request->getPost('R601HK4'),
            'R601HK5'   => $R601DK5_str,
            'R601HK6'   => $this->request->getPost('R601HK6'),
            'R601HK7'   => $this->request->getPost('R601HK7'),
            'R601HK8'   => $R601DK8_str,
            'R601IK2'   => $this->request->getPost('R601IK2'),
            'R601IK3'   => $this->request->getPost('R601IK3'),
            'R601IK4'   => $this->request->getPost('R601IK4'),
            'R601IK5'   => $R601DK5_str,
            'R601IK6'   => $this->request->getPost('R601IK6'),
            'R601IK7'   => $this->request->getPost('R601IK7'),
            'R601IK8'   => $R601DK8_str,
            'R601JK2'   => $this->request->getPost('R601JK2'),
            'R601JK3'   => $this->request->getPost('R601JK3'),
            'R601JK4'   => $this->request->getPost('R601JK4'),
            'R601JK5'   => $R601DK5_str,
            'R601JK6'   => $this->request->getPost('R601JK6'),
            'R601JK7'   => $this->request->getPost('R601JK7'),
            'R601JK8'   => $R601DK8_str,
            'R601KK2'   => $this->request->getPost('R601KK2'),
            'R601KK3'   => $this->request->getPost('R601KK3'),
            'R601KK4'   => $this->request->getPost('R601KK4'),
            'R601KK5'   => $R601DK5_str,
            'R601KK6'   => $this->request->getPost('R601KK6'),
            'R601KK7'   => $this->request->getPost('R601KK7'),
            'R601KK8'   => $R601DK8_str,
            'R604A'   => $this->request->getPost('R604A'),
            'R604B'   => $this->request->getPost('R604B'),
            'R604C'   => $this->request->getPost('R604C'),
            'R604D'   => $this->request->getPost('R604D'),
            'R604E'   => $this->request->getPost('R604E'),
            'R605A'   => $this->request->getPost('R605A'),
            'R605B'   => $this->request->getPost('R605B'),
            'R605C'   => $this->request->getPost('R605C'),
            'R605D'   => $this->request->getPost('R605D'),
            'R605E'   => $this->request->getPost('R605E')
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
            'R701AK2'   => $this->request->getPost('R701AK2'),
            'R701AK3'   => $this->request->getPost('R701AK3'),
            'R701AK4'   => $this->request->getPost('R701AK4'),
            'R701AK5'   => $this->request->getPost('R701AK5'),
            'R701BK2'   => $this->request->getPost('R701BK2'),
            'R701BK3'   => $this->request->getPost('R701BK3'),
            'R701BK4'   => $this->request->getPost('R701BK4'),
            'R701BK5'   => $this->request->getPost('R701BK5'),
            'R701CK2'   => $this->request->getPost('R701CK2'),
            'R701CK3'   => $this->request->getPost('R701CK3'),
            'R701CK4'   => $this->request->getPost('R701CK4'),
            'R701CK5'   => $this->request->getPost('R701CK5'),
            'R701DK2'   => $this->request->getPost('R701DK2'),
            'R701DK3'   => $this->request->getPost('R701DK3'),
            'R701DK4'   => $this->request->getPost('R701DK4'),
            'R701DK5'   => $this->request->getPost('R701DK5'),
            'R701EK2'   => $this->request->getPost('R701EK2'),
            'R701EK3'   => $this->request->getPost('R701EK3'),
            'R701EK4'   => $this->request->getPost('R701EK4'),
            'R701EK5'   => $this->request->getPost('R701EK5'),
            'R701FK2'   => $this->request->getPost('R701FK2'),
            'R701FK3'   => $this->request->getPost('R701FK3'),
            'R701FK4'   => $this->request->getPost('R701FK4'),
            'R701FK5'   => $this->request->getPost('R701FK5'),
            'R701GK2'   => $this->request->getPost('R701GK2'),
            'R701GK3'   => $this->request->getPost('R701GK3'),
            'R701GK4'   => $this->request->getPost('R701GK4'),
            'R701GK5'   => $this->request->getPost('R701GK5'),
            'R701HK2'   => $this->request->getPost('R701HK2'),
            'R701HK3'   => $this->request->getPost('R701HK3'),
            'R701HK4'   => $this->request->getPost('R701HK4'),
            'R701HK5'   => $this->request->getPost('R701HK5'),
            'R701IK2'   => $this->request->getPost('R701IK2'),
            'R701IK3'   => $this->request->getPost('R701IK3'),
            'R701IK4'   => $this->request->getPost('R701IK4'),
            'R701IK5'   => $this->request->getPost('R701IK5'),
            'R701JK2'   => $this->request->getPost('R701JK2'),
            'R701JK3'   => $this->request->getPost('R701JK3'),
            'R701JK4'   => $this->request->getPost('R701JK4'),
            'R701JK5'   => $this->request->getPost('R701JK5'),
            'R701KK2'   => $this->request->getPost('R701KK2'),
            'R701KK3'   => $this->request->getPost('R701KK3'),
            'R701KK4'   => $this->request->getPost('R701KK4'),
            'R701KK5'   => $this->request->getPost('R701KK5'),
            'R701LK2'   => $this->request->getPost('R701LK2'),
            'R701LK3'   => $this->request->getPost('R701LK3'),
            'R701MK2'   => $this->request->getPost('R701MK2'),
            'R701MK3'   => $this->request->getPost('R701MK3'),
            'R701NK2'   => $this->request->getPost('R701NK2'),
            'R701NK3'   => $this->request->getPost('R701NK3'),
            'R701OK2'   => $this->request->getPost('R701OK2'),
            'R701OK3'   => $this->request->getPost('R701OK3'),
            'R701PK3'   => $this->request->getPost('R701PK3'),
            'R701QK3'   => $this->request->getPost('R701QK3'),
            'R701R'   => $this->request->getPost('R701R'),
            'R702A'   => $this->request->getPost('R702A'),
            'R702B'   => $this->request->getPost('R702B'),
            'R702C'   => $this->request->getPost('R702C'),
            'R703A'   => $this->request->getPost('R703A'),
            'R703B'   => $this->request->getPost('R703B'),
            'R703C'   => $this->request->getPost('R703C'),
            'R703D'   => $this->request->getPost('R703D'),
            'R703E'   => $this->request->getPost('R703E'),
            'R703F'   => $this->request->getPost('R703F'),
            'R703G'   => $this->request->getPost('R703G'),
            'R704AK2'   => $this->request->getPost('R704AK2'),
            'R704BK2'   => $this->request->getPost('R704BK2'),
            'R704CK2'   => $this->request->getPost('R704CK2'),
            'R704DK2'   => $this->request->getPost('R704DK2'),
            'R704EK2'   => $this->request->getPost('R704EK2'),
            'R704FK2'   => $this->request->getPost('R704FK2'),
            'R704GK2'   => $this->request->getPost('R704GK2'),
            'R704HK2'   => $this->request->getPost('R704HK2'),
            'R704IK2'   => $this->request->getPost('R704IK2'),
            'R704JK2'   => $this->request->getPost('R704JK2'),
            'R704KK2'   => $this->request->getPost('R704KK2'),
            'R704LK2'   => $this->request->getPost('R704LK2'),
            'R704MK2'   => $this->request->getPost('R704MK2'),
            'R705A'   => $this->request->getPost('R705A'),
            'R705B'   => $this->request->getPost('R705B'),
            'R705C'   => $this->request->getPost('R705C'),
            'R705D'   => $this->request->getPost('R705D'),
            'R705E'   => $this->request->getPost('R705E'),
            'R706A1'   => $this->request->getPost('R706A1'),
            'R706A1B'   => $this->request->getPost('R706A1B'),
            'R706A2'   => $this->request->getPost('R706A2'),
            'R706A2B'   => $this->request->getPost('R706A2B'),
            'R706B'   => $this->request->getPost('R706B'),
            'R706B2'   => $this->request->getPost('R706B2'),
            'R706C'   => $this->request->getPost('R706C'),
            'R706C2'   => $this->request->getPost('R706C2'),
            'R706D'   => $this->request->getPost('R706D'),
            'R706D2'   => $this->request->getPost('R706D2'),
            'R707'   => $this->request->getPost('R707'),
            'R708'   => $this->request->getPost('R708'),
            'R709'   => $this->request->getPost('R709'),
            'R710'   => $this->request->getPost('R710'),
            'R711AK2'   => $this->request->getPost('R711AK2'),
            'R711AK3'   => $this->request->getPost('R711AK3'),
            'R711AK4'   => $this->request->getPost('R711AK4'),
            'R711BK2'   => $this->request->getPost('R711BK2'),
            'R711BK3'   => $this->request->getPost('R711BK3'),
            'R711BK4'   => $this->request->getPost('R711BK4'),
            'R711CK2'   => $this->request->getPost('R711CK2'),
            'R711CK3'   => $this->request->getPost('R711CK3'),
            'R711CK4'   => $this->request->getPost('R711CK4'),
            'R711DK2'   => $this->request->getPost('R711DK2'),
            'R711DK3'   => $this->request->getPost('R711DK3'),
            'R711DK4'   => $this->request->getPost('R711DK4'),
            'R711EK2'   => $this->request->getPost('R711EK2'),
            'R711EK3'   => $this->request->getPost('R711EK3'),
            'R711EK4'   => $this->request->getPost('R711EK4'),
            'R711FK2'   => $this->request->getPost('R711FK2'),
            'R711FK3'   => $this->request->getPost('R711FK3'),
            'R711FK4'   => $this->request->getPost('R711FK4'),
            'R711GK2'   => $this->request->getPost('R711GK2'),
            'R711GK3'   => $this->request->getPost('R711GK3'),
            'R711GK4'   => $this->request->getPost('R711GK4'),
            'R711HK2'   => $this->request->getPost('R711HK2'),
            'R711HK3'   => $this->request->getPost('R711HK3'),
            'R711HK4'   => $this->request->getPost('R711HK4'),
            'R711IK2'   => $this->request->getPost('R711IK2'),
            'R711IK3'   => $this->request->getPost('R711IK3'),
            'R711IK4'   => $this->request->getPost('R711IK4'),
            'R711JK2'   => $this->request->getPost('R711JK2'),
            'R711JK3'   => $this->request->getPost('R711JK3'),
            'R711JK4'   => $this->request->getPost('R711JK4')
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
            'R801_1'   => $this->request->getPost('R801_1'),
            'R801_2'   => $this->request->getPost('R801_2'),
            'R801_3'   => $this->request->getPost('R801_3'),
            'R801_4'   => $this->request->getPost('R801_4'),
            'R801_5'   => $this->request->getPost('R801_5'),
            'R801_6'   => $this->request->getPost('R801_6'),
            'R801_7'   => $this->request->getPost('R801_7'),
            'R802'   => $this->request->getPost('R802'),
            'R803A'   => $this->request->getPost('R803A'),
            'R803B'   => $this->request->getPost('R803B'),
            'R803C'   => $this->request->getPost('R803C'),
            'R803D'   => $this->request->getPost('R803D'),
            'R803E'   => $this->request->getPost('R803E'),
            'R803F'   => $this->request->getPost('R803F'),
            'R803G'   => $this->request->getPost('R803G'),
            'R803H'   => $this->request->getPost('R803H'),
            'R803I'   => $this->request->getPost('R803I'),
            'R803J'   => $this->request->getPost('R803J'),
            'R804A1'   => $this->request->getPost('R804A1'),
            'R804B1'   => $this->request->getPost('R804B1'),
            'R805A'   => $this->request->getPost('R805A'),
            'R805B'   => $this->request->getPost('R805B'),
            'R805C'   => $this->request->getPost('R805C'),
            'R805D'   => $this->request->getPost('R805D'),
            'R805E'   => $this->request->getPost('R805E'),
            'R805F'   => $this->request->getPost('R805F'),
            'R805G'   => $this->request->getPost('R805G'),
            'R805H'   => $this->request->getPost('R805H'),
            'R805I'   => $this->request->getPost('R805I'),
            'R806'   => $this->request->getPost('R806'),
            'R807A'   => $this->request->getPost('R807A'),
            'R807A1'   => $this->request->getPost('R807A1'),
            'R809A'   => $this->request->getPost('R809A'),
            'R809A1'   => $this->request->getPost('R809A1'),
            'R809B'   => $this->request->getPost('R809B'),
            'R809B1'   => $this->request->getPost('R809B1'),
            'R809C'   => $this->request->getPost('R809C'),
            'R809C1'   => $this->request->getPost('R809C1'),
            'R809D'   => $this->request->getPost('R809D'),
            'R809D1'   => $this->request->getPost('R809D1'),
            'R809E'   => $this->request->getPost('R809E'),
            'R809E1'   => $this->request->getPost('R809E1'),
            'R809F'   => $this->request->getPost('R809F'),
            'R809F1'   => $this->request->getPost('R809F1'),
            'R901AK2'   => $this->request->getPost('R901AK2'),
            'R901AK3'   => $this->request->getPost('R901AK3'),
            'R901AK4'   => $this->request->getPost('R901AK4'),
            'R901BK2'   => $this->request->getPost('R901BK2'),
            'R901BK3'   => $this->request->getPost('R901BK3'),
            'R901BK4'   => $this->request->getPost('R901BK4'),
            'R901CK2'   => $this->request->getPost('R901CK2'),
            'R901CK3'   => $this->request->getPost('R901CK3'),
            'R901CK4'   => $this->request->getPost('R901CK4'),
            'R901DK2'   => $this->request->getPost('R901DK2'),
            'R901DK3'   => $this->request->getPost('R901DK3'),
            'R901DK4'   => $this->request->getPost('R901DK4'),
            'R901EK2'   => $this->request->getPost('R901EK2'),
            'R901EK3'   => $this->request->getPost('R901EK3'),
            'R901EK4'   => $this->request->getPost('R901EK4'),
            'R901FK2'   => $this->request->getPost('R901FK2'),
            'R901FK3'   => $this->request->getPost('R901FK3'),
            'R901FK4'   => $this->request->getPost('R901FK4'),
            'R901GK2'   => $this->request->getPost('R901GK2'),
            'R901GK3'   => $this->request->getPost('R901GK3'),
            'R901GK4'   => $this->request->getPost('R901GK4'),
            'R901HK2'   => $this->request->getPost('R901HK2'),
            'R901HK3'   => $this->request->getPost('R901HK3'),
            'R901HK4'   => $this->request->getPost('R901HK4'),
            'R901IK2'   => $this->request->getPost('R901IK2'),
            'R901IK3'   => $this->request->getPost('R901IK3'),
            'R901IK4'   => $this->request->getPost('R901IK4'),
            'R901JK2'   => $this->request->getPost('R901JK2'),
            'R901JK3'   => $this->request->getPost('R901JK3'),
            'R901JK4'   => $this->request->getPost('R901JK4'),
            'R901KK2'   => $this->request->getPost('R901KK2'),
            'R901KK3'   => $this->request->getPost('R901KK3'),
            'R901KK4'   => $this->request->getPost('R901KK4'),
            'R901LK2'   => $this->request->getPost('R901LK2'),
            'R901LK3'   => $this->request->getPost('R901LK3'),
            'R901LK4'   => $this->request->getPost('R901LK4'),
            'R902A'   => $this->request->getPost('R902A'),
            'R1005A'   => $this->request->getPost('R1005A')
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
            'R1101A1'   => $this->request->getPost('R1101A1'),
            'R1101A2'   => $this->request->getPost('R1101A2'),
            'R1101B'   => $this->request->getPost('R1101B'),
            'R1101C'   => $this->request->getPost('R1101C'),
            'R1201A'   => $this->request->getPost('R1201A'),
            'R1201B'   => $this->request->getPost('R1201B'),
            'R1201C'   => $this->request->getPost('R1201C'),
            'R1201D'   => $this->request->getPost('R1201D'),
            'R1201E'   => $this->request->getPost('R1201E'),
            'R1201F'   => $this->request->getPost('R1201F'),
            'R1201G'   => $this->request->getPost('R1201G'),
            'R1201H'   => $this->request->getPost('R1201H'),
            'R1201I'   => $this->request->getPost('R1201I'),
            'R1201J'   => $this->request->getPost('R1201J'),
            'R1201K'   => $this->request->getPost('R1201K'),
            'R1201L'   => $this->request->getPost('R1201L'),
            'R1201M'   => $this->request->getPost('R1201M'),
            'R1201N'   => $this->request->getPost('R1201N'),
            'R1201O'   => $this->request->getPost('R1201O'),
            'R1201P'   => $this->request->getPost('R1201P'),
            'R1202A'   => $this->request->getPost('R1202A'),
            'R1203A'   => $this->request->getPost('R1203A'),
            'R1205A1'   => $this->request->getPost('R1205A1'),
            'R1205A2'   => $this->request->getPost('R1205A2'),
            'R1205A3'   => $this->request->getPost('R1205A3'),
            'R1206A1'   => $this->request->getPost('R1206A1'),
            'R1206A2'   => $this->request->getPost('R1206A2'),
            'R1206A3'   => $this->request->getPost('R1206A3'),
            'R1206A4'   => $this->request->getPost('R1206A4'),
            'R1208AK2'   => $this->request->getPost('R1208AK2'),
            'R1208AK3'   => $this->request->getPost('R1208AK3'),
            'R1208AK4'   => $this->request->getPost('R1208AK4'),
            'R1208BK2'   => $this->request->getPost('R1208BK2'),
            'R1208BK3'   => $this->request->getPost('R1208BK3'),
            'R1208BK4'   => $this->request->getPost('R1208BK4'),
            'R1208CK2'   => $this->request->getPost('R1208CK2'),
            'R1208CK3'   => $this->request->getPost('R1208CK3'),
            'R1208CK4'   => $this->request->getPost('R1208CK4'),
            'R1208DK2'   => $this->request->getPost('R1208DK2'),
            'R1208DK3'   => $this->request->getPost('R1208DK3'),
            'R1208DK4'   => $this->request->getPost('R1208DK4'),
            'R1208EK2'   => $this->request->getPost('R1208EK2'),
            'R1208EK3'   => $this->request->getPost('R1208EK3'),
            'R1208EK4'   => $this->request->getPost('R1208EK4'),
            'R1208FK2'   => $this->request->getPost('R1208FK2'),
            'R1208FK3'   => $this->request->getPost('R1208FK3'),
            'R1208FK4'   => $this->request->getPost('R1208FK4'),
            'R1208GK2'   => $this->request->getPost('R1208GK2'),
            'R1208GK3'   => $this->request->getPost('R1208GK3'),
            'R1208GK4'   => $this->request->getPost('R1208GK4'),
            'R1208HK2'   => $this->request->getPost('R1208HK2'),
            'R1208HK3'   => $this->request->getPost('R1208HK3'),
            'R1208HK4'   => $this->request->getPost('R1208HK4'),
            'R1208IK2'   => $this->request->getPost('R1208IK2'),
            'R1208IK3'   => $this->request->getPost('R1208IK3'),
            'R1208IK4'   => $this->request->getPost('R1208IK4'),
            'R1209AK2'   => $this->request->getPost('R1209AK2'),
            'R1209AK3'   => $this->request->getPost('R1209AK3'),
            'R1209AK4'   => $this->request->getPost('R1209AK4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4'),
            'R1209K2'   => $this->request->getPost('R1209K2'),
            'R1209K3'   => $this->request->getPost('R1209K3'),
            'R1209K4'   => $this->request->getPost('R1209K4')
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
            'R1303A01K3'   => $this->request->getPost('R1303A01K3'),
            'R1303A01K4'   => $this->request->getPost('R1303A01K4'),
            'R1303A02K3'   => $this->request->getPost('R1303A02K3'),
            'R1303A02K4'   => $this->request->getPost('R1303A02K4'),
            'R1303A03K3'   => $this->request->getPost('R1303A03K3'),
            'R1303A03K4'   => $this->request->getPost('R1303A03K4'),
            'R1303A04K3'   => $this->request->getPost('R1303A04K3'),
            'R1303A04K4'   => $this->request->getPost('R1303A04K4'),
            'R1303A05K3'   => $this->request->getPost('R1303A05K3'),
            'R1303A05K4'   => $this->request->getPost('R1303A05K4'),
            'R1303A06K3'   => $this->request->getPost('R1303A06K3'),
            'R1303A06K4'   => $this->request->getPost('R1303A06K4'),
            'R1303A07K3'   => $this->request->getPost('R1303A07K3'),
            'R1303A07K4'   => $this->request->getPost('R1303A07K4'),
            'R1303A08K3'   => $this->request->getPost('R1303A08K3'),
            'R1303A08K4'   => $this->request->getPost('R1303A08K4'),
            'R1303A09K3'   => $this->request->getPost('R1303A09K3'),
            'R1303A09K4'   => $this->request->getPost('R1303A09K4'),
            'R1303A10K3'   => $this->request->getPost('R1303A10K3'),
            'R1303A10K4'   => $this->request->getPost('R1303A10K4'),
            'R1303A11K3'   => $this->request->getPost('R1303A11K3'),
            'R1303A11K4'   => $this->request->getPost('R1303A11K4'),
            'R1305'   => $this->request->getPost('R1305'),
            'R1306A'   => $this->request->getPost('R1306A'),
            'R1306A2'   => $this->request->getPost('R1306A2'),
            'R1307AK2'   => $this->request->getPost('R1307AK2'),
            'R1307AK3'   => $this->request->getPost('R1307AK3'),
            'R1307BK2'   => $this->request->getPost('R1307BK2'),
            'R1307BK3'   => $this->request->getPost('R1307BK3')
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
            'R1403A'   => $this->request->getPost('R1403A'),
            'R1403B'   => $this->request->getPost('R1403B'),
            'R1403C'   => $this->request->getPost('R1403C'),
            'R1403D'   => $this->request->getPost('R1403D'),
            'R1403E'   => $this->request->getPost('R1403E'),
            'R1403F'   => $this->request->getPost('R1403F'),
            'R1403G'   => $this->request->getPost('R1403G'),
            'R1403H'   => $this->request->getPost('R1403H'),
            'R1403I'   => $this->request->getPost('R1403I'),
            'R1404A1'   => $this->request->getPost('R1404A1'),
            'R1404B'   => $this->request->getPost('R1404B'),
            'R1404C'   => $this->request->getPost('R1404C'),
            'R1404D'   => $this->request->getPost('R1404D'),
            'R1405A'   => $this->request->getPost('R1405A'),
            'R1405B'   => $this->request->getPost('R1405B'),
            'R1406'   => $this->request->getPost('R1406'),
            'R14061'   => $this->request->getPost('R14061'),
            'R1407A'   => $this->request->getPost('R1407A'),
            'R1407A1'   => $this->request->getPost('R1407A1'),
            'R1407B'   => $this->request->getPost('R1407B')
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
            'R1501AK2'   => $this->request->getPost('R1501AK2'),
            'R1501AK3'   => $this->request->getPost('R1501AK3'),
            'R1501AK4'   => $this->request->getPost('R1501AK4'),
            'R1501AK5'   => $this->request->getPost('R1501AK5'),
            'R1501BK2'   => $this->request->getPost('R1501BK2'),
            'R1501BK3'   => $this->request->getPost('R1501BK3'),
            'R1501BK4'   => $this->request->getPost('R1501BK4'),
            'R1501BK5'   => $this->request->getPost('R1501BK5'),
            'R1501CK2'   => $this->request->getPost('R1501CK2'),
            'R1501CK3'   => $this->request->getPost('R1501CK3'),
            'R1501CK4'   => $this->request->getPost('R1501CK4'),
            'R1501CK5'   => $this->request->getPost('R1501CK5'),
            'R1502_1'   => $this->request->getPost('R1502_1'),
            'R1502_1A'   => $this->request->getPost('R1502_1A'),
            'R1502_1B'   => $this->request->getPost('R1502_1B'),
            'R1502_1C'   => $this->request->getPost('R1502_1C'),
            'R1502_1D'   => $this->request->getPost('R1502_1D'),
            'R1502_2'   => $this->request->getPost('R1502_2'),
            'R1502_3'   => $this->request->getPost('R1502_3'),
            'R1502_4'   => $this->request->getPost('R1502_4'),
            'R1502_5'   => $this->request->getPost('R1502_5'),
            'R1502_6'   => $this->request->getPost('R1502_6'),
            'R1502_7'   => $this->request->getPost('R1502_7'),
            'R1502_8'   => $this->request->getPost('R1502_8'),
            'R1502_9'   => $this->request->getPost('R1502_9'),
            'R1502_10'   => $this->request->getPost('R1502_10'),
            'R1502_11'   => $this->request->getPost('R1502_11')
        ]);

        return redirect()->to(base_url('data/create11/'.$data_id));
    }

    public function save11($data_id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        $dataModel = new data_model();
        // $data_id = $this->uri->getSegment(3);

        //insert data into database
        $dataModel->update($data_id, [
            'R1503A'   => $this->request->getPost('R1503A'),
            'R1503B'   => $this->request->getPost('R1503B'),
            'R1503C'   => $this->request->getPost('R1503C'),
            'R1504A'   => $this->request->getPost('R1504A'),
            'R1504B'   => $this->request->getPost('R1504B'),
            'R1504C'   => $this->request->getPost('R1504C'),
            'R1601AK2'   => $this->request->getPost('R1601AK2'),
            'R1601AK2_1'   => $this->request->getPost('R1601AK2_1'),
            'R1601AK3'   => $this->request->getPost('R1601AK3'),
            'R1601AK4'   => $this->request->getPost('R1601AK4'),
            'R1601AK5'   => $this->request->getPost('R1601AK5'),
            'R1601AK6'   => $this->request->getPost('R1601AK6'),
            'R1601BK2'   => $this->request->getPost('R1601BK2'),
            'R1601BK2_1'   => $this->request->getPost('R1601BK2_1'),
            'R1601BK3'   => $this->request->getPost('R1601BK3'),
            'R1601BK4'   => $this->request->getPost('R1601BK4'),
            'R1601BK5'   => $this->request->getPost('R1601BK5'),
            'R1601AK6'   => $this->request->getPost('R1601AK6'),
            'R1602A'   => $this->request->getPost('R1602A'),
            'R1602A1'   => $this->request->getPost('R1602A1'),
            'R1602B'   => $this->request->getPost('R1602B'),
            'R1602B1'   => $this->request->getPost('R1602B1'),
            'R1602C'   => $this->request->getPost('R1602C'),
            'R1602C1'   => $this->request->getPost('R1602C1'),
            'R1602D'   => $this->request->getPost('R1602D'),
            'R1602D1'   => $this->request->getPost('R1602D1'),
            'R1603A'   => $this->request->getPost('R1603A'),
            'R1604A'   => $this->request->getPost('R1604A'),
            'R1604B'   => $this->request->getPost('R1604B'),
            'R1604C'   => $this->request->getPost('R1604C'),
            'R1604D'   => $this->request->getPost('R1604D')
        ]);

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
