<?php 


namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id_blog';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'foto'];

}
