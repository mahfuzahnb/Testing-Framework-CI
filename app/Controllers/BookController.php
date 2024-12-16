<?php

namespace App\Controllers;

use App\Models\BookModel;

class BookController extends BaseController
{
    public function index()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_year' => $this->request->getPost('published_year'),
            'status' => 'available',
        ];

        $model->save($data);
        return redirect()->to('/')->with('success', 'Book added successfully.');
    }

    public function edit($id)
    {
        $model = new BookModel();
        $data['book'] = $model->find($id);
        return view('edit', $data);
    }

    public function update($id)
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_year' => $this->request->getPost('published_year'),
            'status' => $this->request->getPost('status'),
        ];

        $model->update($id, $data);
        return redirect()->to('/')->with('success', 'Book updated successfully.');
    }

    public function delete($id)
    {
        $model = new BookModel();
        $model->delete($id);
        return redirect()->to('/')->with('success', 'Book deleted successfully.');
    }
}
