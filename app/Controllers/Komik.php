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



    public function detail($slug){
        
        $data=[
            'title'=>'Detail Komik',
            'komik'=>$this->komikModel->getKomik($slug)

        ];

        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul komik ('.$slug.') tidak di temukan');
        }

        return view ('komik/detail',$data);
    }


    public function  create(){
        $data=[
            'title'=>'Form Tambah Data Komik'
        ];


        return view('komik/create',$data);
    }


    public function save(){

        $slug=url_title($this->request->getVar('judul'),'-','true');

        // dd($this->request->getVar());
        $this->komikModel->save([
            'judul'=>$this->request->getVar('judul'),
            'slug'=>$slug,
            'pemulis'=>$this->request->getVar('pemulis'),
            'penerbit'=>$this->request->getVar('penerbit'),
            'sampul'=>$this->request->getVar('sampul'),
        ]);

        return redirect()->to('/komik');
    }
}
