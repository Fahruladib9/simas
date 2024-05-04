<?php

namespace App\Controllers\Kas_Sosial;

use App\Controllers\BaseController;
use App\Controllers\Setting;
use App\Models\Data_UserModel;
use App\Models\Kas_SosialModel;

class C_Pengeluaran extends BaseController
{
    public function __construct()
    {
        $this->kasSosial = new Kas_SosialModel();
        $this->userModel = new Data_UserModel();
        $this->setting = new Setting();
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pengeluaran'] = $this->kasSosial->ambildata();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_sosial/pengeluaran/_pengeluaran', $data);
    }
    public function tambah()
    {
        $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
        $pemasukan = $this->kasSosial->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasSosial->selectSum('pengeluaran')->first()->pengeluaran;

        $Saldo = $pemasukan - $pengeluaran;
        $data = $this->request->getPost();
        if ($Saldo < $data['pengeluaran']) {
            $this->setting->allert('Error', 'Pengeluaran Tidak Boleh Melebihi Saldo Kas Sosial', 'error');
            return redirect()->to('admin/pengeluaran-sosial');
        } else {
            $this->kasSosial->insert($data);
            return redirect()->to('admin/pengeluaran-sosial');
        }
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pengeluaran'] = $this->kasSosial->where('id_kasSosial', $id)->first();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_sosial/pengeluaran/edit', $data);
    }
    public function update($id = null)
    {
        $pemasukan = $this->kasSosial->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasSosial->selectSum('pengeluaran')->first()->pengeluaran;

        $Saldo = $pemasukan - $pengeluaran;
        $this->setting->allert('Sukses', 'Data Berhasil di Update', 'success');
        $data = $this->request->getPost();
        $data['pengeluaran'] = $this->request->getPost('jumlah');
        if ($Saldo < $data['jumlah']) {
            $this->setting->allert('Error', 'Pengeluaran Tidak Boleh Melebihi Saldo Kas Sosial', 'error');
            return redirect()->to('admin/pengeluaran-sosial');
        } else {
            $this->kasSosial->update($id, $data);
            return redirect()->to('admin/pengeluaran-sosial');
        }
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->kasSosial->delete($id);
        return redirect()->to('admin/pengeluaran-sosial');
    }
}
