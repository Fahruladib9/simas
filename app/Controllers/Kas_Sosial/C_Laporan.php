<?php

namespace App\Controllers\Kas_Sosial;

use App\Controllers\BaseController;
use App\Controllers\Setting;
use App\Models\Data_UserModel;
use App\Models\Kas_SosialModel;
use Dompdf\Dompdf;

class C_Laporan extends BaseController
{
    public function __construct()
    {
        $this->userModel = new Data_UserModel();
        $this->kasSosial = new Kas_SosialModel();
        $this->setting = new Setting();
    }
    public function view()
    {
        $user = session('user');
        $data['namaUser'] = $user['nama'];
        $data['jumlah'] = $this->userModel->selectCount('id_user')->first()->id_user;
        return view('admin/kas_sosial/laporan/_laporan', $data);
    }
    public function cetak()
    {
        $tanggal_awal = $this->request->getPost('tanggal_awal');
        $tanggal_akhir = $this->request->getPost('tanggal_akhir');
        $data['tanggal_awal'] = $tanggal_awal;
        $data['tanggal_akhir'] = $tanggal_akhir;
        $data['rekap'] = $this->kasSosial->sortir($tanggal_awal, $tanggal_akhir);

        $data['jumlahPemasukan'] = $this->kasSosial->where('tanggal>=', $tanggal_awal)->where('tanggal<=', $tanggal_akhir)->selectSum('pemasukan')->first()->pemasukan;
        $data['jumlahPengeluaran'] = $this->kasSosial->where('tanggal>=', $tanggal_awal)->where('tanggal<=', $tanggal_akhir)->selectSum('pengeluaran')->first()->pengeluaran;
        $pemasukan = $this->kasSosial->selectSum('pemasukan')->first()->pemasukan;
        $pengeluaran = $this->kasSosial->selectSum('pengeluaran')->first()->pengeluaran;
        $totalSaldo = $pemasukan - $pengeluaran;
        $data['totalSaldo'] = $totalSaldo;
        $banyuasin = file_get_contents('assets/img/banyuasin3.png');
        $logo_dt = file_get_contents('assets/img/logo_dt.png');

        $data['banyuasin'] = base64_encode($banyuasin);
        $data['logo_dt'] = base64_encode($logo_dt);

        $filename = date('y-m-d-H-i-s') . ' - Laporan kas masjid';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('admin/kas_sosial/laporan/_cetak', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // buat nomor halaman otomatis
        $canvas = $dompdf->get_canvas();
        $font = "arial";
        $canvas->page_text(72, 18, "Halaman: {PAGE_NUM} dari {PAGE_COUNT}", $font, 12, array(0, 0, 0));

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
