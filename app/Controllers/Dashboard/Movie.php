<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\MovieModel;

class Movie extends BaseController
{
    protected $movieModel;

    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function new() {
        return view('dashboard/movie/new', [
            'movie' => $this->movieModel->getEmptyMovie()
        ]);
    }

    public function show($id) {
        return view('dashboard/movie/show', [
            'movie' => $this->movieModel->find($id)
        ]);
    }

    
    public function create() {
        $movieModel = new MovieModel();

        $movieModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->back();
    }

    public function edit($id) {
        return view('dashboard/movie/edit', [
            'movie' => $this->movieModel->find($id)
        ]);
    }

    public function update($id)
    {
        $this->movieModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);

        // return redirect()->back();
        // return redirect()->route('/movie.test');
        return redirect()->to('/dashboard/movie');
    }

    public function delete($id) {  
        $this->movieModel->delete($id);
    }

    public function index()
    {
        return view('dashboard/movie/index', [
            'movies' => $this->movieModel->findAll()
        ]);
    }


}
