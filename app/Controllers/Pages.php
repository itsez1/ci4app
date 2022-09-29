<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Web programing unpas'
        ];
        // return view('welcome_message');
        return view('pages/home', $data);
    }


    public function about()
    {

        $data = [
            'title' => 'About Me'
        ];
        // return view('welcome_message');

        return view('pages/about', $data);
    }




    public function contact()
    {

        $data = [
            'title' => 'Contact Us!',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jln. abc no.123',
                    'kota' => 'bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jln. setia budi no.193',
                    'kota' => 'bandung'
                ]
            ]
        ];


        return view('pages/contact', $data);
    }
}
