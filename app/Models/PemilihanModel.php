<?php

namespace App\Models;

use CodeIgniter\Model;


class PemilihanModel extends Model
{
    protected $table      = 'pemilihan';
    protected $primaryKey = 'id_pemilihan';

    protected $allowedFields = [
        'id_kode', 'id_pemilihan', 'pilihan'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
