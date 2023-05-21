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

    public function new()
    {
        return view('dashboard/movie/new', [
            'movie' => $this->movieModel->getEmptyMovie()
        ]);
    }

    public function show($id)
    {
        // var_dump($this->movieModel->asObject()->find($id));

        return view('dashboard/movie/show', [
            'movie' => $this->movieModel->find($id)
        ]);
    }


    public function create()
    {
        if ($this->validate('movies')) {

            $this->movieModel->insert([
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description')
            ]);

        } else {

            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        return view('dashboard/movie/edit', [
            'movie' => $this->movieModel->find($id)
        ]);
    }

    public function update($id)
    {
        if ($this->validate('movies')) {

            $this->movieModel->update($id, [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description')
            ]);

        } else {

            session()->setFlashdata([
               'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }

         return redirect()->back()->with('message', '更新電影完成。');
        // return redirect()->route('/movie.test');
        //return redirect()->to('/dashboard/movie');
    }

    public function delete($id)
    {
        $this->movieModel->delete($id);
    }

    public function index()
    {
        // Query Builder
        // $db = \Config\Database::connect();
        // $builder = $db->table('movies');

        // return $builder->limit(10, 20)->getCompiledSelect()


        echo view('dashboard/movie/index', [
            'movies' => $this->movieModel->findAll()
        ]);
    }


}
