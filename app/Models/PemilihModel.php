<?php

namespace App\Models;

use CodeIgniter\Model;


class PemilihModel extends Model
{
    protected $table      = 'pemilih';
    protected $primaryKey = 'id_kode';

    protected $allowedFields = [
        'id_kode', 'kode', 'status'
    ];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}
