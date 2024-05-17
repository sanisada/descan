<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index(): string
    {
        $session = session();
        return view('templates/header')
            . view('templates/menu')
            . view('dashboard_view')
            . view('templates/footer');
    }
}
