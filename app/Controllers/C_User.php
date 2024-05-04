<?php

namespace App\Controllers;

use App\Models\Data_UserModel;
use App\Controllers\Setting;

class C_User extends BaseController
{
    public function __construct()
    {
        $this->userModel = new Data_UserModel();
        $this->setting = new Setting();
    }

    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['user'] = $this->userModel->findAll();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/data_user/_dataUser', $data);
        // dd($data);
    }

    public function tambah()
    {
        $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->userModel->insert($data);
        return redirect()->to('/admin/data-user');
    }

    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['user'] = $this->userModel->find($id);
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/data_user/edit', $data);
    }

    public function update($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Diupdate', 'success');
        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->userModel->update($id, $data);
        return redirect()->to('/admin/data-user');
    }

    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->userModel->delete($id);
        return redirect()->to('/admin/data-user');
    }
}
