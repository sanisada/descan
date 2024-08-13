<?php

namespace App\Controllers;
use App\Models\data_model;

class Home extends BaseController
{

    public function index(): string
    {
        // $session = session();

        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        return $this->show_data($wilayah);

        // return view('home');
        //     . view('templates/menu')
        //     . view('home')
        //     . view('templates/footer');
    }

    public function show_data($wilayah) {
        // Menggunakan parameter $wilayah untuk memfilter data
        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        $dataModel = new data_model();

        if (!empty($wilayah) && !empty($tahun)) {
            // Jika filter wilayah dipilih, ambil populasi berdasarkan wilayah tersebut
            $populationByRegion = $dataModel->countPopulationByRegion($wilayah, $tahun);
            $pendudukLakilakiByRegion = $dataModel->getPendudukLakilakiByRegion($wilayah, $tahun);
            $pendudukPerempuanByRegion = $dataModel->getPendudukPerempuanByRegion($wilayah, $tahun);
        }

        $data = array(
            'wilayah'       => $wilayah,
            'lakibypekon'   => $pendudukLakilakiByRegion,
            'prbypekon'     => $pendudukPerempuanByRegion,
            'tahun'         => $tahun,
            'totalbypekon'  => $populationByRegion,
            'pekerjaan'     => $dataModel->getBekerjaData()
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
