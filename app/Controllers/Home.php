<?php

namespace App\Controllers;

use App\Models\Data_UserModel;
use App\Models\Kas_MasjidModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->userModel = new Data_UserModel();
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $pemasukan = $this->kasMasjid->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->first()->pengeluaran;

        $data['kasMasjid'] = $pemasukan - $pengeluaran;
        $data['pemasukan'] = $pemasukan;
        $data['pengeluaran'] = $pengeluaran;
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/home', $data);
    }
}
