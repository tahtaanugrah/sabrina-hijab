<?php

namespace App\Controllers;

use App\Models\JenisModel;

class JenisController extends BaseController
{
    public function index()
    {
        $model = new JenisModel();
        $data['jenis'] = $model->select('jenis.*, katalog.namakatalog')
        ->join('katalog', 'katalog.id_katalog = jenis.id_katalog')
        ->findAll();
        return view('jenis', $data);
    }

    public function create()
    {
        return view('create_jenis');
    }

    public function store()
    {
        $model = new JenisModel();
        $model->save([
            'id_katalog' => $this->request->getPost('id_katalog'),
            'namajenis' => $this->request->getPost('namajenis'),
            'foto' => $this->request->getPost('foto'),
        ]);

        return redirect()->to('/jenis');
    }

    public function edit($id)
    {
        $model = new JenisModel();
        $data['jenis'] = $model->find($id);
        return view('edit_jenis', $data);
    }

    public function update($id)
    {
        $model = new JenisModel();
        $model->update($id, [
            'id_katalog' => $this->request->getPost('id_katalog'),
            'namajenis' => $this->request->getPost('namajenis'),
            'foto' => $this->request->getPost('foto'),
        ]);

        return redirect()->to('/jenis');
    }

    public function delete($id)
    {
        $model = new JenisModel();
        $model->delete($id);

        return redirect()->to('/jenis');
    }
}
