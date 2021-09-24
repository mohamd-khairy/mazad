<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MainController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends MainController
{
    public $model = Answer::class;
    public $view = 'categorys';
    public $route = 'category';
    public $create_validation = [
        'name' => 'required',
    ];
    public $edit_validation = [
        'name' => 'required',
    ];
    public $filters = [];
    public $indexCondition = [];
    public $with = [];
    public $create_data = [];
    public $edit_data = [];

    public function __construct()
    {
        $this->create_data = $this->edit_data = [];
    }
}
