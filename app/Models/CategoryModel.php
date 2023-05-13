<?php

//  php spark make:model categoryModel

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $allowedFields    = ['title'];

    public function getEmptyMovie()
    {
        return [
            'title' => ''
        ];
    }
}
