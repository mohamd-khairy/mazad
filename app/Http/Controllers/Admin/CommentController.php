<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Mazad;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends MainController
{
    public $model = Comment::class;
    public $view = 'comments';
    public $route = 'comment';
    public $create_validation = [
        'user_id' => 'required',
        'mazad_id' => 'required',
        'price' => 'required',
    ];
    public $edit_validation = [
        'user_id' => 'required',
        'mazad_id' => 'required',
        'price' => 'required',
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
            'mazads' => Mazad::where('status', 1)->orderBy('id', 'desc')->get(),
        ];
    }
}
