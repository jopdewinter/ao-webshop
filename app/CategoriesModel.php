<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{

    protected $table = 'categories';

    public function getCategories() {
        return categories::all();
    }
}
