<?php

namespace App\Controllers\Content;

use App\Controllers\BaseController;
use App\Controllers\Setting;
use App\Models\Data_UserModel;
use App\Models\GaleriModel;
use App\Models\Kas_MasjidModel;

class C_Galeri extends BaseController
{
    public function __construct()
    {
        $this->kasMasjid = new Kas_MasjidModel();
        $this->userModel = new Data_UserModel();
        $this->galeriModel = new GaleriModel();
        $this->setting = new Setting();
    }
    public function index()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        $data['galeri'] = $this->galeriModel->orderBy('id_galeri', 'DESC')->findAll();
        return view("admin/content/galeri/_galeri", $data);
    }
    public function tambah()
    {
        $gambar = $this->request->getFile('gambar');
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'judul Tidak boleh kosong'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'keterangan Tidak boleh kosong'
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
            $gambar->move('assets/img/galeri/', $gambar->getRandomName());
            $data = [
                'judul'  => $this->request->getPost('judul'),
                'keterangan' => $this->request->getPost('keterangan'),
                'gambar' => $gambar->getName(),
            ];
            $this->galeriModel->insert($data);
            $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
            return redirect()->to('/admin/galeri');
        }
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        $data['galeri'] = $this->galeriModel->find($id);
        return view('admin/content/galeri/edit', $data);
    }
    public function update($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Diupdate', 'success');
        $data = $this->request->getPost();
        $this->galeriModel->update($id, $data);
        return redirect()->to('/admin/galeri');
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->galeriModel->delete($id);
        return redirect()->to('/admin/galeri');
    }
}
