<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    private $BlogModel;

    public function __construct() {
        $this->BlogModel = new BlogModel();

    }

    public function index() {
        $data['blog'] = $this->BlogModel->findAll();   // SELECT * FROM BERITA
        return view('blog', $data);

    }
    public function create() {
        return view('create_blog');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->BlogModel->save($data);    // INSERT INTO berita …………….
        return redirect()->to('/blog');
    }

    public function edit($id) {
        $data['blog'] = $this->BlogModel->find($id);  // SELECT * FROM berita WHERE id=$id
        return view('edit_blog', $data);
}

    public function update($id) {
        $data = $this->request->getPost();
        $this->BlogModel->update($id, $data);   // UPDATE berita SET judul=sdasdada, berita=sdasda  WHERE id=$id
        return redirect()->to('/blog');
}

public function delete($id) {
    $this->BlogModel->delete($id);  // DELETE FROM berita WHERE id=$id  
    return redirect()->to('/blog');
}

  
}


