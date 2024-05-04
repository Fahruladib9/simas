<?php

namespace App\Controllers\Kas_Masjid;

use App\Controllers\BaseController;
use App\Models\Data_UserModel;
use App\Models\Kas_MasjidModel;

class C_Rekap_Kas extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->userModel = new Data_UserModel();
        // Hitung jumlah pemasukan, pengeluaran, saldo
        $this->pemasukan = $this->kasMasjid->selectSum('pemasukan')->first()->pemasukan;
        $this->pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->first()->pengeluaran;
        $this->saldo = $this->pemasukan - $this->pengeluaran;
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['rekap'] = $this->kasMasjid->ambilData();
        $data['pemasukan'] = $this->pemasukan;
        $data['pengeluaran'] = $this->pengeluaran;
        $data['saldo'] = $this->saldo;
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/rekap/_rekapKas', $data);
    }
    public function sortirData()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        // Sortir berdasarkan tanggal
        $tanggal_awal = $this->request->getPost('tanggal_awal');
        $tanggal_akhir = $this->request->getPost('tanggal_akhir');
        $sortir = $this->kasMasjid->sortir($tanggal_awal, $tanggal_akhir);
        $data['rekap'] = $sortir;
        // Hitung jumlah Pemasukan dan pengeluaran setelah disortir 
        $pemasukan = $this->kasMasjid->selectSum('pemasukan')->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)->first()->pemasukan;
        $pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)->first()->pengeluaran;
        $data['pemasukan'] = $pemasukan;
        $data['pengeluaran'] = $pengeluaran;
        $data['saldo'] = $this->saldo;
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/rekap/_rekapKas', $data);
    }
}
