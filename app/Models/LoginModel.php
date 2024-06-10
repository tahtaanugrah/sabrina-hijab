<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    public function login($name, $password)
    {
        return $this->db->table('admin')->where([
            'username' => $name,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
