<?php

namespace App\Controllers;
use App\Models\data_model;
use App\Models\kec_model;
use App\Models\desa_model;
use App\Models\ques_model;
use App\Models\sls_model;

class Dashboard extends BaseController
{

    public function index(): string
    {

        $dataModel = new data_model();

        $data = array(
            'laki'  => $dataModel->getPendudukLakilaki(),
            'pr'     => $dataModel->getPendudukPerempuan(),
            'total'     => $dataModel->getTotalPopulation(),
            'pekerjaan' => $dataModel->getBekerjaData(),
            'pager' => $dataModel->pager
        );

        $session = session();
        return view('templates/header')
            . view('templates/menu')
            . view('dashboard_view', $data)
            . view('templates/footer');
    }
}
