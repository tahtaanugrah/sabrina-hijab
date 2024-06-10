<?php

namespace App\Controllers;

use App\Models\DeskripsiModel;

class DeskripsiController extends BaseController
{
    public function index()
    {
        $model = new DeskripsiModel();
        $data = [
            'title' => 'deskripsi'
        ];
        return view('deskripsi', $data);
    }

    public function create()
    {
        return view('create_deskripsi');
    }

    public function store()
    {
        $model = new DeskripsiModel();
        $model->save([
            'id_katalog' => $this->request->getPost('id_katalog'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'warna' => $this->request->getPost('warna'),
            'foto' => $this->request->getPost('foto'),
        ]);

        return redirect()->to('/deskripsi');
    }

    public function edit($id)
    {
        $model = new DeskripsiModel();
        $data['deskripsi'] = $model->find($id);
        return view('edit_deskripsi', $data);
    }

    public function update($id)
    {
        $model = new DeskripsiModel();
        $model->update($id, [

            'id_katalog' => $this->request->getPost('id_katalog'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'warna' => $this->request->getPost('warna'),
            'foto' => $this->request->getPost('foto'),

        ]);

        return redirect()->to('/deskripsi');
    }

    public function delete($id)
    {
        $model = new DeskripsiModel();
        $model->delete($id);

        return redirect()->to('/deskripsi');
    }
}
