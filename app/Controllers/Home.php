<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index(): string
    {
        $session = session();
        return view('home');
        //     . view('templates/menu')
        //     . view('home')
        //     . view('templates/footer');
    }
}
