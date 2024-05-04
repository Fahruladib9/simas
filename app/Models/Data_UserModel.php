<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user';
    protected $returnType     = 'object';
    protected $allowedFields = [
        'id_user',
        'username',
        'password',
        'nama',
    ];

    public function cekLogin($username)
    {
        return $this->where('username', $username)->first();
    }
}
