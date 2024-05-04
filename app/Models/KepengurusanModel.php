<?php

namespace App\Models;

use CodeIgniter\Model;

class KepengurusanModel extends Model
{
    protected $table      = 'kepengurusan';
    protected $primaryKey = 'id_kepengurusan';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'id_kepengurusan',
        'nama',
        'jabatan',
        'pesan',
        'gambar',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
