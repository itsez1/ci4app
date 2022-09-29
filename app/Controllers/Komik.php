<?php

namespace App\Controllers;

use App\Models\KomikModel;


class Komik extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar komik',
            'komik' => $komik


        ];




        // =============================================

        // CARA KONEK DB TAMPA KONEK
        // $db = \Config\Database::connect();
        // $komik = $db->query('select * from komik');

        // foreach ($komik->getResultArray() as $row) {
        //     dd($row);
        // }

        //==============================================





        /*
        CARA MEMANGGIL CLASS MODEL
        // $komikModel = new \App\Models\KomikModel();

        KE2-> IMPORT KELAS MODEL DI PALING ATAS
            + use App\Models\KomikModel;

        */




        // return view('welcome_message');
        return view('komik/index', $data);
    }
}
