<?php

namespace App\Models;

use CodeIgniter\Model;

class Kas_MasjidModel extends Model
{
    protected $table      = 'kas_masjid';
    protected $primaryKey = 'id_kasMasjid';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'id_kasMasjid',
        'keterangan',
        'pemasukan',
        'pengeluaran',
        'tanggal',
    ];

    public function ambilData()
    {
        return $this->orderBy('id_kasMasjid', 'DESC')->findAll();
    }
    public function sortir($tanggal_awal, $tanggal_akhir)
    {
        return $this->where([
            'tanggal >=' => $tanggal_awal,
            'tanggal <=' => $tanggal_akhir,
        ])->findAll();
    }
}
