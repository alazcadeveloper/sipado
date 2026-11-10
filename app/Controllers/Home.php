<?php

namespace App\Controllers;

use App\Models\PemilihanModel;
use App\Models\PemilihModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->PemilihanModel = new PemilihanModel();
        $this->PemilihModel = new PemilihModel();
    }

    public function index()
    {
        $data = ['navbar' => 1,];
        return view('home', $data);
    }

    public function kode_pemilih()
    {
        $data = ['navbar' => 0,];
        return view('kode_pemilih', $data);
    }

    public function cek_kode()
    {
        $kode = $_POST['kode'];
        $db = db_connect();
        $pemilih = $db->query("select * from pemilih where kode='$kode' ");
        $hasil_pemilih = $pemilih->getRow();
        if ($hasil_pemilih == null) {
            session()->setFlashdata('pesan', ' Kode Pemilih Tidak ditemukan. ');
            return redirect()->to('/Home/kode_pemilih')->withInput();
        } else if ($hasil_pemilih->status == 1) {
            session()->setFlashdata('pesan', ' Kode Pemilih telah digunakan . ');
            return redirect()->to('/Home/kode_pemilih');
        } else if ($hasil_pemilih->status == 0) {
            session()->set('kode', $kode);
            session()->setFlashdata('pesan', ' Silahkan Tentukan Pilihan Anda . ');
            return view('pemilihan');
        }
    }

    public function pilihan()
    {
        // dd($_POST);
        $kode = $_POST['kode'];
        $pilihan = $_POST['pilihan'];
        $db = db_connect();
        $tb_pemilih = $db->query("select * from pemilih where kode='$kode'");
        $pemilih = $tb_pemilih->getRow();
        $tb_pilihan = $db->query("select * from pemilihan where id_kode=$pemilih->id_kode");
        $hasil_pilihan=$tb_pilihan->getRow();
        if($hasil_pilihan==null){
        $this->PemilihanModel->save([
            'id_kode' => $pemilih->id_kode,
            'pilihan' => $pilihan
        ]);  
        
        $this->PemilihModel->save([
            'id_kode' => $pemilih->id_kode,
            'kode' => $pemilih->kode,
            'status' => 1
        ]);
        session()->remove('kode');
        session()->setFlashdata('pesan', ' Terimakasih Telah Menggunakan Hak Pilih Anda . ');
        return redirect()->to('/Home');
        }else{
        session()->remove('kode');
        session()->setFlashdata('pesan', 'Anda Telah Menggunakan Hak Pilih Anda . ');
        return redirect()->to('/Home');
        }
    }

    public function status()
    {
        $data = ['navbar' => 2,];
        return view('status', $data);
    }
}
