<?php

namespace App\Controllers;

use App\Models\DeskripsiModel;
use App\Models\JenisModel;
use App\Models\KatalogModel;

class Katalog extends BaseController
{
    protected $katalogModel;
    protected $jenisModel;
    protected $deskripsiModel;

    public function __construct()
    {

        $this->katalogModel = new KatalogModel();
        $this->jenisModel = new JenisModel();
        $this->deskripsiModel = new DeskripsiModel();
    }
    public function index()
    {
        $katalog = $this->katalogModel->findAll();
        $data = [
            'katalog' => $katalog
        ];
        return view('katalog', $data);
    }
    public function jenis_katalog($id = false)
    {
        $jenis = $this->jenisModel->where(['id_katalog' => $id])->findAll();
        $data = [
            'jenis' => $jenis
        ];
        return view('jenis', $data);
    }
    public function deskripsi($id = false)
    {
        $deskripsi = $this->deskripsiModel->where(['id_jenis' => $id])->first();
        $warna = $this->deskripsiModel->where(['id_jenis' => $id])->findAll();
        $jenis = $this->jenisModel->where(['id_jenis' => $id])->first();

        if ($deskripsi === null || $jenis === null) {
            // Arahkan ke halaman 404 jika deskripsi atau jenis tidak ditemukan
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Deskripsi katalog belum ditambahkan!');
        }
        $data = [
            'deskripsi' => $deskripsi,
            'warna' => $warna,
            'jenis' => $jenis,
        ];

        return view('deskripsi', $data);
    }
    public function deskripsi_warna($id, $warna)
    {
        $deskripsi = $this->deskripsiModel->where(['id_jenis' => $id])->where('warna', $warna)->first();
        $warna = $this->deskripsiModel->where(['id_jenis' => $id])->findAll();
        $jenis = $this->jenisModel->where(['id_jenis' => $id])->first();

        $data = [
            'deskripsi' => $deskripsi,
            'warna' => $warna,
            'jenis' => $jenis,
        ];

        return view('deskripsi', $data);
    }
}
