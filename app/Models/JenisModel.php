<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table = 'jenis';
    protected $primaryKey = 'id_jenis';
    protected $allowedFields = ['id_katalog', 'namajenis', 'foto'];


public function katalog()
    {
        return $this->belongsTo(KatalogModel::class, 'id_katalog');
    }
}