<?php

namespace App\Controllers;

use App\Models\MovieModel;

class Movie extends BaseController
{
    protected $movieModel;

    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function new() {
        return view('movie/new', [
            'movie' => $this->movieModel->getEmptyMovie()
        ]);
    }

    public function show($id) {
        return view('movie/show', [
            'movie' => $this->movieModel->find($id)
        ]);
    }

    
    public function create() {
        $movieModel = new MovieModel();

        $movieModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
    }

    public function edit($id) {
        return view('movie/edit', [
            'movie' => $this->movieModel->find($id)
        ]);
    }

    public function update($id)
    {
        $this->movieModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        echo 'update';
    }

    public function delete($id) {  
        $this->movieModel->delete($id);
    }

    public function index()
    {
        return view('movie/index', [
            'movies' => $this->movieModel->findAll()
        ]);
    }


}
