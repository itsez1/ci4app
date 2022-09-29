<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Daftar komik'
        ];
        // return view('welcome_message');
        return view('komik/index', $data);
    }
}
