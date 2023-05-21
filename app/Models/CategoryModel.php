<?php

//  php spark make:model categoryModel

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $allowedFields    = ['title'];
    protected $returnType       = 'object';

    public function getEmptyMovie()
    {
        return [
            'title' => ''
        ];
    }
}
