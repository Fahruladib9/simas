<?php

namespace App\Controllers\Kas_Sosial;

use App\Controllers\BaseController;
use App\Models\Kas_SosialModel;
use App\Controllers\Setting;
use App\Models\Data_UserModel;

class C_Pemasukan extends BaseController
{
    public function __construct()
    {
        $this->kasSosial = new Kas_SosialModel();
        $this->userModel = new Data_UserModel();
        $this->setting = new Setting;
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pemasukan'] = $this->kasSosial->ambilData();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_sosial/pemasukan/_pemasukan', $data);
    }
    public function tambah()
    {
        $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
        $data = $this->request->getPost();
        $this->kasSosial->insert($data);
        return redirect()->to('admin/pemasukan-sosial');
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['pemasukan'] = $this->kasSosial->find($id);
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_sosial/pemasukan/edit', $data);
    }
    public function update($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil di Edit', 'success');
        $data = $this->request->getPost();
        $data['pemasukan'] = $this->request->getPost('jumlah');
        $this->kasSosial->update($id, $data);
        return redirect()->to('admin/pemasukan-sosial');
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->kasSosial->delete($id);
        return redirect()->to('admin/pemasukan-sosial');
    }
}
