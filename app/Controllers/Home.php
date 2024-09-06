<?php

namespace App\Controllers;
use App\Models\data_model;
use App\Models\data2_model;
use App\Models\desa_model;

class Home extends BaseController
{

    public function index(): string
    {
        $session = session();

        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        // $this->desaModel = new desa_model();
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        return $this->show_data($wilayah);

    }

    public function show_data($wilayah) {
        // Menggunakan parameter $wilayah untuk memfilter data
        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        $dataModel = new data_model();
        $data2Model = new data2_model();
        $desaModel = new desa_model();
        $sectorMapping = [
            1 => 'Tanaman Pangan',
            2 => 'Tanaman Hortikultura',
            3 => 'Tanaman Perkebunan',
            4 => 'Peternakan',
            5 => 'Perikanan',
            6 => 'Kehutanan',
            7 => 'Jasa Pertanian'
        ];

        $tpsMapping = [
            1 => 'Ada, digunakan',
            2 => 'Ada, tidak digunakan',
            3 => 'Tidak ada'
        ];

        $polisiMapping = [
            1 => 'Ada',
            2 => 'Tidak ada'
        ];

        $olahragaMapping = [
            1 => '3',
            2 => '2',
            3 => '1',
            4 => '0'
        ];
        
        if (!empty($wilayah) && !empty($tahun)) {
            // Jika filter wilayah dipilih, ambil populasi berdasarkan wilayah tersebut
            $total  = $dataModel->getsubsektorbypekon($wilayah, $tahun);
            $tps    = $dataModel->gettpsbypekon($wilayah, $tahun);

            $getsubsektorbypekon = isset($sectorMapping[$total]) ? $sectorMapping[$total] : '-'; 
            $getkomoditasbypekon = $dataModel->getkomoditasbypekon($wilayah, $tahun);
            $getsungaibypekon = $dataModel->getsungaibypekon($wilayah, $tahun);
            $gettpsbypekon = isset($tpsMapping[$tps]) ? $tpsMapping[$tps] : '-'; 

            $getbencanabypekon   = $dataModel->getbencanabypekon($wilayah, $tahun);
            $getbencanasekarangbypekon   = $dataModel->getbencanasekarangbypekon($wilayah, $tahun);

            $getsarkesbypekon   = $data2Model->getsarkesbypekon($wilayah, $tahun);
            $getsarpendbypekon   = $data2Model->getsarpendbypekon($wilayah, $tahun);

            $getmasjidbypekon    = $data2Model->getmasjidbypekon($wilayah, $tahun);
            $getsuraubypekon    = $data2Model->getsuraubypekon($wilayah, $tahun);
            $getkristenbypekon    = $data2Model->getkristenbypekon($wilayah, $tahun);
            $getkatolikbypekon    = $data2Model->getkatolikbypekon($wilayah, $tahun);
            $getkapelbypekon    = $data2Model->getkapelbypekon($wilayah, $tahun);
            $getpurabypekon    = $data2Model->getpurabypekon($wilayah, $tahun);
            $getwiharabypekon    = $data2Model->getwiharabypekon($wilayah, $tahun);
            $getkelentengbypekon    = $data2Model->getkelentengbypekon($wilayah, $tahun);
            $getbasarahbypekon    = $data2Model->getbasarahbypekon($wilayah, $tahun);
            $getlainnyabypekon    = $data2Model->getlainnyabypekon($wilayah, $tahun);

            $getbankbypekon    = $data2Model->getbankbypekon($wilayah, $tahun);
            $getkoperasibypekon    = $data2Model->getkoperasibypekon($wilayah, $tahun);
            $getsarpekbypekon    = $data2Model->getsarpekbypekon($wilayah, $tahun);
            $getsarprasebypekon    = $data2Model->getsarprasebypekon($wilayah, $tahun);

            $olahraga = $data2Model->getolahragabypekon($wilayah, $tahun);
            $getolahragabypekon = array_map(function($value) use ($olahragaMapping) {return isset($olahragaMapping[$value]) ? $olahragaMapping[$value] : '-';
            }, $olahraga);

            $gethansipbypekon    = $data2Model->gethansipbypekon($wilayah, $tahun);
            $polisi    = $data2Model->getpolisibypekon($wilayah, $tahun);
            $getpolisibypekon = isset($polisiMapping[$polisi]) ? $polisiMapping[$polisi] : '-';

            $getthpilkadesbypekon    = $data2Model->getthpilkadesbypekon($wilayah, $tahun);
            $getcalonpilkadesbypekon    = $data2Model->getcalonpilkadesbypekon($wilayah, $tahun);
            $getsuarapilkadesbypekon    = $data2Model->getsuarapilkadesbypekon($wilayah, $tahun);
            
        }
        
        $data = array(
            'wilayah'               => $wilayah,
            'tahun'                 => $tahun,
            'getsubsektorbypekon'   => $getsubsektorbypekon,
            'getkomoditasbypekon'   => $getkomoditasbypekon,
            'gettpsbypekon'         => $gettpsbypekon,
            'getsungaibypekon'      => $getsungaibypekon,
            'getbencanabypekon'     => $getbencanabypekon,
            'getbencanasekarangbypekon'     => $getbencanasekarangbypekon,
            'getsarkesbypekon'       => $getsarkesbypekon,
            'getsarpendbypekon'       => $getsarpendbypekon,
            'getmasjidbypekon'      => $getmasjidbypekon,
            'getsuraubypekon'       => $getsuraubypekon,
            'getkristenbypekon'       => $getkristenbypekon,
            'getkatolikbypekon'       => $getkatolikbypekon,
            'getkapelbypekon'       => $getkapelbypekon,
            'getpurabypekon'       => $getpurabypekon,
            'getwiharabypekon'        => $getwiharabypekon,
            'getkelentengbypekon'        => $getkelentengbypekon,
            'getbasarahbypekon'       => $getbasarahbypekon,
            'getlainnyabypekon'       => $getlainnyabypekon,
            'getbankbypekon'       => $getbankbypekon,
            'getkoperasibypekon'       => $getkoperasibypekon,
            'getsarpekbypekon'       => $getsarpekbypekon,
            'getsarprasebypekon'       => $getsarprasebypekon,
            'getolahragabypekon'        => $getolahragabypekon,
            'gethansipbypekon'       => $gethansipbypekon,
            'getpolisibypekon'       => $getpolisibypekon,
            'getthpilkadesbypekon'       => $getthpilkadesbypekon,
            'getcalonpilkadesbypekon'       => $getcalonpilkadesbypekon,
            'getsuarapilkadesbypekon'       => $getsuarapilkadesbypekon,
            'desa' => $desaModel->findAll(),
        );

        // Load view dengan data yang sudah disiapkan
        return view('home', $data);
    }

    public function filter() {
        // Tangkap nilai wilayah dari POST request
        $wilayah = $this->request->getPost('wilayah');
        $tahun = $this->request->getPost('tahun');
    
        // Panggil function show_data dengan parameter $wilayah
        $this->show_data($wilayah, $tahun);
    }
}
