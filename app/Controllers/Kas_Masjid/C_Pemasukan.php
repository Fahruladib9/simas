<?php

namespace App\Controllers\Kas_Masjid;

use App\Controllers\BaseController;
use App\Models\Kas_MasjidModel;
use App\Controllers\Setting;
use App\Models\Data_UserModel;

class C_Pemasukan extends BaseController
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
        $data['pemasukan'] = $this->kasMasjid->ambilData();
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/pemasukan/_pemasukan', $data);
    }
    public function tambah()
    {
        $this->setting->allert('Sukses', 'Data Berhasil Ditambahkan', 'success');
        $keterangan = $this->request->getPost('keterangan');
        $jumlah = $this->request->getPost('pemasukan');
        $tanggal = $this->request->getPost('tanggal');

        $this->kasMasjid->insert([
            'keterangan' => $keterangan,
            'pemasukan' => $jumlah,
            'tanggal' => $tanggal,
        ]);
        return redirect()->to('admin/pemasukan-masjid');
    }
    public function edit($id = null)
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $ambilData = $this->kasMasjid->where('id_kasMasjid', $id)->first();
        $data['pemasukan'] = $ambilData;
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_masjid/pemasukan/edit', $data);
        // dd($data);
    }
    public function update($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil di Update', 'success');
        $data = $this->request->getPost();
        $data['pemasukan'] = $this->request->getPost('jumlah');
        $this->kasMasjid->update($id, $data);
        return redirect()->to('admin/pemasukan-masjid');
    }
    public function delete($id = null)
    {
        $this->setting->allert('Sukses', 'Data Berhasil Dihapus', 'success');
        $this->kasMasjid->delete($id);
        return redirect()->to('admin/pemasukan-masjid');
    }
}
