<?php namespace App\Controllers;

use App\Models\AboutModel;
use CodeIgniter\Controller;

class AboutController extends Controller
{
    private $AboutModel;

    public function __construct() {
        $this->AboutModel = new AboutModel();

    }

    public function index() {
        $data['about'] = $this->AboutModel->findAll();   // SELECT * FROM BERITA
        return view('about', $data);

        
    }

    public function create() {
        return view('create_about');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->AboutModel->save($data);    // INSERT INTO berita …………….
        return redirect()->to('/about');
    }

    public function edit($id) {
        $data['about'] = $this->AboutModel->find($id);  // SELECT * FROM berita WHERE id=$id
        return view('edit_about', $data);
    }

    public function update($id) {
        $data = $this->request->getPost();
        $this->AboutModel->update($id, $data);   // UPDATE berita SET judul=’sdasdada’, berita=’sdasda’  WHERE id=$id
        return redirect()->to('/about');
    }

    public function delete($id) {
        $this->AboutModel->delete($id);  // DELETE FROM berita WHERE id=$id  
        return redirect()->to('/about');
    }




  
}
