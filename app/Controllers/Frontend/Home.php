<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\Kas_MasjidModel;
use App\Models\KepengurusanModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->galeriModel = new GaleriModel();
        $this->kepengurusanModel = new KepengurusanModel();
    }

    public function index()
    {
        $pemasukan = $this->kasMasjid->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->first()->pengeluaran;
        $saldo = $pemasukan - $pengeluaran;
        $data['kasMasjid'] = $saldo;
        $data['pemasukan'] = $pemasukan;
        $data['pengeluaran'] = $pengeluaran;
        $data['galeri'] = $this->galeriModel->orderBy('id_galeri', 'DESC')->limit(9)->find();
        $data['kepengurusan'] = $this->kepengurusanModel->orderBy('id_kepengurusan', 'DESC')->limit(6)->find();

        $api_url = 'https://api.myquran.com/v2/sholat/jadwal/0816/' . date('Y') . '/' . date('m') . '/' . date('d');
        $jsonData = file_get_contents($api_url);
        $response_data = json_decode($jsonData);
        $data['jadwal_sholat'] = $response_data->data;
        return view('frontend/home', $data);
        // print_r($jadwal_shalat);
    }

    public function maintenance()
    {
        return view('maintenance');
    }
}
