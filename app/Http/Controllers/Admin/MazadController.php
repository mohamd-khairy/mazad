<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Models\Mazad;
use App\Models\User;
use Illuminate\Http\Request;

class MazadController extends MainController
{
    public $model = Mazad::class;
    public $view = 'mazads';
    public $route = 'mazad';
    public $create_validation = [
        'name' => 'required|min:3',
        'images' => 'nullable|array',
        'images.*' => 'required|image|max:2048',
        'details' => 'required',
        'price' => 'required',
        'price_min_plus' => 'required',
        'category_id' => 'required',
        'user_id' => 'required',
        'from' => 'required|afte:today',
        'to' => 'required|after:from'
    ];
    public $edit_validation = [
        'name' => 'required|min:3',
        'images' => 'nullable|array',
        'images.*' => 'required|image|max:2048',
        'details' => 'required',
        'price' => 'required',
        'price_min_plus' => 'required',
        'category_id' => 'required',
        'user_id' => 'required',
        'from' => 'nullable',
        'to' => 'nullable'
    ];
    public $filters = [];
    public $indexCondition = [];
    public $with = [];
    public $create_data = [];
    public $edit_data = [];

    public function __construct()
    {
        $this->create_data = $this->edit_data = [
            'users' => User::where('type', '=', 'user')->orderBy('id', 'desc')->get(),
            'categories' => Category::orderBy('id', 'desc')->get(),
        ];
    }
}
