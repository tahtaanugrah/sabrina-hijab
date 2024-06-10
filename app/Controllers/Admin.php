<?php

namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\DeskripsiModel;
use App\Models\HomeModel;
use App\Models\JenisModel;
use App\Models\KatalogModel;

class Admin extends BaseController
{

    private $AboutModel;
    private $BlogModel;
    protected $katalogModel;
    protected $jenisModel;
    protected $deskripsiModel;
    protected $HomeModel;

    public function __construct()
    {
        $this->AboutModel = new AboutModel();
        $this->BlogModel = new BlogModel();
        $this->katalogModel = new KatalogModel();
        $this->jenisModel = new JenisModel();
        $this->deskripsiModel = new DeskripsiModel();
        $this->HomeModel = new HomeModel();
    }


    public function kelola_home()
    {
        $HomeModel = $this->HomeModel->first();
        $data = [
            'title' => 'Kelola Home',
            'home' => $HomeModel,
        ];
        return view('admin/kelolaHome', $data);
    }
    public function edit_home()
    {
        $HomeModel = $this->HomeModel->first();
        $data = [
            'title' => 'Kelola Home',
            'home' => $HomeModel,
        ];
        return view('admin/edit_home', $data);
    }
    public function edit_home_save()
    {
        $id_home = $this->request->getVar('id_home');

        // Ambil data form
        $data = [
            'section1_judul' => $this->request->getVar('section1_judul'),
            'section1_deskripsi' => $this->request->getVar('section1_deskripsi'),
            'section2_judul' => $this->request->getVar('section2_judul'),
            'section2_deskripsi' => $this->request->getVar('section2_deskripsi'),
        ];

        // Lokasi penyimpanan file gambar
        $target_dir = 'img/';

        // Handle upload file gambar section 1
        for ($i = 1; $i <= 4; $i++) {
            $file_key = "section1_gambar" . $i;
            $file = $this->request->getFile($file_key);
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move($target_dir, $newName);
                $data[$file_key] = $newName;
            } else {
                // Jika tidak ada file baru yang diupload, gunakan nama file yang lama
                $data[$file_key] = $this->request->getVar($file_key . '_old');
            }
        }

        // Handle upload file gambar section 2
        for ($i = 1; $i <= 6; $i++) {
            $file_key = "section2_gambar" . $i;
            $file = $this->request->getFile($file_key);
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move($target_dir, $newName);
                $data[$file_key] = $newName;
            } else {
                // Jika tidak ada file baru yang diupload, gunakan nama file yang lama
                $data[$file_key] = $this->request->getVar($file_key . '_old');
            }
        }

        // Update data ke database
        $this->HomeModel->update($id_home, $data);

        // Set flashdata pesan sukses
        session()->setFlashdata('pesan', 'Data home berhasil diupdate');

        // Redirect ke halaman dashboard
        return redirect()->to('/kelola_home');
    }
    public function index()
    {
        $about = $this->AboutModel->first();
        $data = array(
            'title' => 'Kelola About Us',
            'about' => $about
        );
        return view('admin/kelolaAboutUs', $data);
    }
    public function edit_about()
    {
        $about = $this->AboutModel->first();
        $data = array(
            'title' => 'Edit About Us',
            'about' => $about
        );
        return view('admin/edit_about', $data);
    }
    public function about_edit_save()
    {
        // Ambil data dari form
        $id = '1';
        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $reseller = $this->request->getPost('reseller');
        $kontak = $this->request->getPost('kontak');
        $gambar_lama = $this->request->getPost('gambar_lama');

        // Validasi data jika diperlukan

        // Proses upload gambar baru jika ada
        $gambarBaru = $this->request->getFile('gambar');
        if ($gambarBaru->isValid() && $gambarBaru->getSize() > 0) {
            // Hapus gambar lama jika bukan default-profile.png
            if ($gambar_lama !== 'default-profile.png' && file_exists(FCPATH . 'img/' . $gambar_lama)) {
                unlink(FCPATH . 'img/' . $gambar_lama);
            }

            // Simpan gambar baru
            $gambarNama = $gambarBaru->getRandomName();
            $gambarBaru->move(ROOTPATH . 'public/img', $gambarNama);
        } else {
            // Gunakan gambar lama jika tidak ada gambar baru diupload
            $gambarNama = $gambar_lama;
        }
        $model = new AboutModel();
        $data = [
            'judul' => $judul,
            'isi' => $isi,
            'reseller' => $reseller,
            'kontak' => $kontak,
            'foto' => $gambarNama
        ];
        $model->update($id, $data); // Melakukan update data

        session()->setFlashdata('pesan', 'Update About Success');
        return redirect()->to('/kelola_about_us');
    }
    public function kelola_blog()
    {
        $blog = $this->BlogModel->findAll();
        $data = array(
            'title' => 'Kelola Blog',
            'blog' => $blog
        );
        return view('admin/kelolaBlog', $data);
    }
    public function tambah_blog()
    {

        $data = array(
            'title' => 'Tambah Blog',
        );
        return view('admin/create_blog', $data);
    }
    public function blog_tambah_save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul wajib diisi !'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi tidak boleh kosong !'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_blog')->withInput();
        } else {
            //jika valid
            $fileGambar = $this->request->getFile('gambar');
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);

            $this->BlogModel->save([
                'foto' => $namaGambar,
                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah blog');
            return redirect()->to('/kelola_blog');
        }
    }
    public function edit_blog($id = false)
    {
        $blog = $this->BlogModel->where(['id_blog' => $id])->first();
        $data = [
            'title' => 'Edit Blog',
            'blog' => $blog
        ];
        return view('admin/edit_blog', $data);
    }
    public function edit_blog_save()
    {
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'foto' => $namaGambar,
        );

        $this->BlogModel->update($this->request->getPost('id_blog'), $dataToUpdate);

        return redirect()->to('/kelola_blog');
    }
    public function delete_blog($id = false)
    {
        $this->BlogModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil menghapus blog');
        return redirect()->to('/kelola_blog');
    }

    public function kelola_katalog()
    {
        $katalog = $this->katalogModel->findAll();
        $data = [
            'title' => 'Kelola Katalog',
            'katalog' => $katalog
        ];
        return view('admin/kelolaKatalog', $data);
    }
    public function tambah_katalog()
    {
        $data = [
            'title' => 'Tambah Katalog',
        ];
        return view('admin/create_katalog', $data);
    }
    public function katalog_tambah_save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ],
            'namakatalog' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama katalog wajib diisi !'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_katalog')->withInput();
        } else {
            //jika valid
            $fileGambar = $this->request->getFile('gambar');
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);

            $this->katalogModel->save([
                'foto' => $namaGambar,
                'namakatalog' => $this->request->getVar('namakatalog'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah katalog baru');
            return redirect()->to('/kelola_katalog');
        }
    }
    public function edit_katalog($id = false)
    {
        $katalog = $this->katalogModel->where(['id_katalog' => $id])->first();
        $data = [
            'title' => 'Edit katalog',
            'katalog' => $katalog
        ];
        return view('admin/edit_katalog', $data);
    }
    public function edit_katalog_save()
    {
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'namakatalog' => $this->request->getPost('namakatalog'),
            'foto' => $namaGambar,
        );

        $this->katalogModel->update($this->request->getPost('id_katalog'), $dataToUpdate);

        return redirect()->to('/kelola_katalog');
    }
    public function delete_katalog($id = false)
    {
        $this->katalogModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil menghapus Katalog');
        return redirect()->to('/kelola_katalog');
    }
    public function jenis_katalog()
    {
        $jenis = $this->jenisModel->findAll();
        $data = [
            'title' => 'Kelola Jenis',
            'jenis' => $jenis
        ];
        return view('admin/jenisKatalog', $data);
    }
    public function tambah_jenis()
    {
        $katalog = $this->katalogModel->findAll();
        $data = array(
            'title' => 'Tambah jenis',
            'katalog' => $katalog
        );
        return view('admin/create_jenis', $data);
    }
    public function jenis_tambah_save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ],
            'namakatalog' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Katalog belum dipilih !'
                ]
            ],
            'namajenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama jenis katalog wajib diisi !'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_jenis')->withInput();
        } else {
            //jika valid
            $fileGambar = $this->request->getFile('gambar');
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);

            $this->jenisModel->save([
                'foto' => $namaGambar,
                'id_katalog' => $this->request->getVar('namakatalog'),
                'namajenis' => $this->request->getVar('namajenis'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah katalog baru');
            return redirect()->to('/jenis_katalog');
        }
    }
    public function edit_jenis($id = false)
    {
        $jenis = $this->jenisModel->where(['id_jenis' => $id])->first();
        $katalog = $this->katalogModel->findAll();
        $data = [
            'title' => 'Edit Jenis Katalog',
            'jenis' => $jenis,
            'katalog' => $katalog
        ];
        return view('admin/edit_jenis', $data);
    }
    public function edit_jenis_save()
    {
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'id_katalog' => $this->request->getPost('namakatalog'),
            'namajenis' => $this->request->getPost('namajenis'),
            'foto' => $namaGambar,
        );

        $this->jenisModel->update($this->request->getPost('id_jenis'), $dataToUpdate);

        return redirect()->to('/jenis_katalog');
    }
    public function delete_jenis($id = false)
    {
        $this->jenisModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil menghapus jenis');
        return redirect()->to('/jenis_katalog');
    }
    public function deskripsi_katalog()
    {
        $deskripsi = $this->deskripsiModel->findAll();
        $data = [
            'title' => 'Kelola Deskripsi',
            'deskripsi' => $deskripsi
        ];
        return view('admin/deskripsiKatalog', $data);
    }
    public function tambah_deskripsi()
    {
        $jenis = $this->jenisModel->findAll();
        $data = array(
            'title' => 'Tambah deskripsi',
            'jenis' => $jenis
        );
        return view('admin/create_deskripsi', $data);
    }
    public function deskripsi_tambah_save()
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ],
            'namajenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih jenis katalog terlebih dahulu !'
                ]
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'warna tidak boleh kosong !'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi tidak boleh kosong !'
                ]
            ],
        ])) {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('/tambah_deskripsi')->withInput();
        } else {
            //jika valid
            $fileGambar = $this->request->getFile('gambar');
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);

            $this->deskripsiModel->save([
                'foto' => $namaGambar,
                'id_jenis' => $this->request->getVar('namajenis'),
                'warna' => $this->request->getVar('warna'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ]);
            session()->setFlashdata('pesan', 'Berhasil menambah deskripsi');
            return redirect()->to('/deskripsi_katalog');
        }
    }
    public function edit_deskripsi($id = false)
    {
        $deskripsi = $this->deskripsiModel->where(['id_deskripsi' => $id])->first();
        $jenis = $this->jenisModel->findAll();
        $data = [
            'title' => 'Edit deskripsi',
            'deskripsi' => $deskripsi,
            'jenis' => $jenis,

        ];
        return view('admin/edit_deskripsi', $data);
    }
    public function edit_deskripsi_save()
    {
        $namaGambar = $this->request->getVar('gambarLama');
        // Periksa apakah ada gambar yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            unlink('img/' . $this->request->getVar('gambarLama'));
        } else {
            $namaGambar = $namaGambar;
        }

        // Menyiapkan data yang ingin diupdate
        $dataToUpdate = array(
            'id_jenis' => $this->request->getPost('namajenis'),
            'warna' => $this->request->getPost('warna'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaGambar,
        );

        $this->deskripsiModel->update($this->request->getPost('id_deskripsi'), $dataToUpdate);

        return redirect()->to('/deskripsi_katalog');
    }
    public function delete_deskripsi($id = false)
    {
        $this->deskripsiModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil menghapus deskripsi');
        return redirect()->to('/deskripsi_katalog');
    }
}
