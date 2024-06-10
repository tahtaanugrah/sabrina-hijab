<?php

namespace App\Controllers;

use App\Models\KatalogModel;

class KatalogController extends BaseController
{
    public function index()
    {
        $model = new KatalogModel();
        $data['katalog'] = $model->findAll();

        return view('katalog', $data);
    }
    

    public function create()
    {
        return view('create_katalog');
    }

    public function store()
    {
        $model = new KatalogModel();

        $data = [
            'namakatalog' => $this->request->getPost('namakatalog'),
            'foto' => $this->request->getPost('foto'),
        ];

        $model->insert($data);

        return redirect()->to('/katalog');
    }

    

    public function edit($id_katalog)
    {
        $model = new KatalogModel();
        $data['katalog'] = $model->find($id_katalog);

        return view('edit_katalog', $data);
    }

    public function update($id_katalog)
    {
        $model = new KatalogModel();

        $data = [
            'namakatalog' => $this->request->getPost('namakatalog'),
            'foto' => $this->request->getPost('foto'),
        ];

        $model->update($id_katalog, $data);

        return redirect()->to('/katalog');
    }

    public function delete($id_katalog)
    {
        $model = new KatalogModel();
        $model->delete($id_katalog);

        return redirect()->to('/katalog');
    }

    
}
