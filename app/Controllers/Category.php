<?php

// php spark make:controller Category

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();

        
        return view('category/index', [
            'categories' => $categoryModel->findAll()
        ]);
    }

    public function new() {
        $categoryModel = new CategoryModel();


        return view('category/new', [
            'category' => $categoryModel->getEmptyMovie()
        ]);
    }

    public function create() {
        $categoryModel = new CategoryModel();

        $categoryModel->insert([
            'title' => $this->request->getPost('title')
        ]);
    }

    public function show($id) {
        $categoryModel = new CategoryModel();

        return view('category/show', [
            'category' => $categoryModel->find($id)
        ]);
    }

    public function edit($id) {
        $categoryModel = new CategoryModel();

        return view('category/edit', [
            'category' => $categoryModel->find($id)
        ]);
    }

    public function update($id) {
        $categoryModel = new CategoryModel();

        $categoryModel->update($id, [
            'title' => $this->request->getPost('title')
        ]);
    }

    public function delete($id) {
        $categoryModel = new CategoryModel();
 
        $categoryModel->delete($id);
    }
}
