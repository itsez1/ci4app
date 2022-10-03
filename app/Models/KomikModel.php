<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    // ...
    protected $table      = 'komik';
    protected $allowedFields = ['judul','slug','penulis','penerbit','sampul'];



    public function getKomik($slug=false){
        if ($slug===false){
            return $this->findAll();
        }


        session()->setflashdata('pesan','data berhasil di tambahkan.');
        
        return $this->where(['slug'=>$slug])->first();

    }
}
