<?php

namespace App\Models;

use CodeIgniter\Model;

class DeskripsiModel extends Model
{
    protected $table = 'deskripsi';
    protected $primaryKey = 'id_deskripsi';
    protected $allowedFields = ['id_jenis', 'deskripsi', 'warna', 'foto'];
}
