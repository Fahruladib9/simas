<?php

namespace App\Controllers\Kas_Masjid;

use App\Controllers\BaseController;
use App\Controllers\Setting;
use App\Models\Data_UserModel;
use App\Models\Kas_MasjidModel;

class C_Pengeluaran extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->userModel = new Data_UserModel();
        $this->setting = new Setting();
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pengeluaran'] = $this->kasMasjid->ambildata();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/pengeluaran/_pengeluaran', $data);
    }
    public function tambah()
    {
        $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
        $pemasukan = $this->kasMasjid->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->first()->pengeluaran;

        $Saldo = $pemasukan - $pengeluaran;
        $data = $this->request->getPost();
        if ($Saldo < $data['pengeluaran']) {
            $this->setting->allert('Error', 'Pengeluaran Tidak Boleh Melebihi Saldo Kas Masjid', 'error');
            return redirect()->to('admin/pengeluaran-masjid');
        } else {
            $this->kasMasjid->insert($data);
            return redirect()->to('admin/pengeluaran-masjid');
        }
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pengeluaran'] = $this->kasMasjid->where('id_kasMasjid', $id)->first();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/pengeluaran/edit', $data);
    }
    public function update($id = null)
    {
        $pemasukan = $this->kasMasjid->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasMasjid->selectSum('pengeluaran')->first()->pengeluaran;

        $Saldo = $pemasukan - $pengeluaran;
        $this->setting->allert('Sukses', 'Data Berhasil di Update', 'success');
        $data = $this->request->getPost();
        $data['pengeluaran'] = $this->request->getPost('jumlah');
        if ($Saldo < $data['jumlah']) {
            $this->setting->allert('Error', 'Pengeluaran Tidak Boleh Melebihi Saldo Kas Masjid', 'error');
            return redirect()->to('admin/pengeluaran-masjid');
        } else {
            $this->kasMasjid->update($id, $data);
            return redirect()->to('admin/pengeluaran-masjid');
        }
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->kasMasjid->delete($id);
        return redirect()->to('admin/pengeluaran-masjid');
    }
}
