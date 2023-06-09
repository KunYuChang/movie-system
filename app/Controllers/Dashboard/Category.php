<?php

// php spark make:controller Category

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();

        
        return view('dashboard/category/index', [
            'categories' => $categoryModel->findAll()
        ]);
    }

    public function new() {
        $categoryModel = new CategoryModel();


        return view('dashboard/category/new', [
            'category' => $categoryModel->getEmptyMovie()
        ]);
    }

    public function create() {
        $categoryModel = new CategoryModel();

        if ($this->validate('categories')) {
            $categoryModel->insert([
                'title' => $this->request->getPost('title')
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }


        return redirect()->back()->with('message', '標籤建立成功!');
    }

    public function show($id) {

        session()->set('key', 'value');

        $categoryModel = new CategoryModel();

        return view('dashboard/category/show', [
            'category' => $categoryModel->find($id)
        ]);
    }

    public function edit($id) {
        $categoryModel = new CategoryModel();

        return view('dashboard/category/edit', [
            'category' => $categoryModel->find($id)
        ]);
    }

    public function update($id) {
        $categoryModel = new CategoryModel();

        if ($this->validate('categories')) {
            $categoryModel->update($id, [
                'title' => $this->request->getPost('title')
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }


        return redirect()->back()->with('message', '標籤建立成功!');
    }

    public function delete($id) {
        $categoryModel = new CategoryModel();
 
        $categoryModel->delete($id);

        return redirect()->back()->with('message', '刪除完成!');
    }
}
