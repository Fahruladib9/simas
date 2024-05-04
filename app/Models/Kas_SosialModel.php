<?php

namespace App\Models;

use CodeIgniter\Model;

class Kas_SosialModel extends Model
{
    protected $table      = 'kas_sosial';
    protected $primaryKey = 'id_kasSosial';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'id_kasSosial',
        'keterangan',
        'pemasukan',
        'pengeluaran',
        'tanggal',
    ];

    public function ambilData()
    {
        return $this->orderBy('id_kasSosial', 'DESC')->findAll();
    }
    public function sortir($tanggal_awal, $tanggal_akhir)
    {
        return $this->where([
            'tanggal >=' => $tanggal_awal,
            'tanggal <=' => $tanggal_akhir,
        ])->findAll();
    }
}
