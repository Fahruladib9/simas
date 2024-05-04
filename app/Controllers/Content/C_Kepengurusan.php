<?php

namespace App\Controllers\Content;

use App\Controllers\BaseController;
use App\Controllers\Setting;
use App\Models\Data_UserModel;
use App\Models\Kas_MasjidModel;
use App\Models\KepengurusanModel;

class C_Kepengurusan extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->userModel = new Data_UserModel();
        $this->kepengurusanModel = new KepengurusanModel();
        $this->setting = new Setting();
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        $data['kepengurusan'] = $this->kepengurusanModel->orderBy('id_kepengurusan', 'DESC')->findAll();
        return view("admin/content/kepengurusan/_kepengurusan", $data);
    }
    public function tambah()
    {
        $gambar = $this->request->getFile('gambar');
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama Tidak boleh kosong'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jabatan Tidak boleh kosong'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,7168]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 7 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $gambar->move('assets/img/kepengurusan/', $gambar->getRandomName());
            $data = [
                'nama'  => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'pesan' => $this->request->getPost('pesan'),
                'gambar' => $gambar->getName(),
            ];
            $this->kepengurusanModel->insert($data);
            $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
            return redirect()->to('/admin/kepengurusan');
        }
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        $data['kepengurusan'] = $this->kepengurusanModel->find($id);
        return view('admin/content/kepengurusan/edit', $data);
    }
    public function update($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Diupdate', 'success');
        $data = $this->request->getPost();
        $this->kepengurusanModel->update($id, $data);
        return redirect()->to('/admin/kepengurusan');
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->kepengurusanModel->delete($id);
        return redirect()->to('/admin/kepengurusan');
    }
}
