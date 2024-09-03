<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Panduan extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('templates/menu')
            . view('panduan')
            . view('templates/footer');
    }
}
