<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'id_home';
    protected $allowedFields = ['section1_judul', 'section1_deskripsi', 'section1_gambar1', 'section1_gambar2', 'section1_gambar3', 'section1_gambar4', 'section2_judul', 'section2_deskripsi', 'section2_gambar1', 'section2_gambar2', 'section2_gambar3', 'section2_gambar4', 'section2_gambar5', 'section2_gambar6'];
}
