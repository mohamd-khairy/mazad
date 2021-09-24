<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MainController;
use App\Models\Category;
use App\Models\Answer;
use App\Models\Ask;
use App\Models\Mazad;
use App\Models\User;
use Illuminate\Http\Request;

class AnswerController extends MainController
{
    public $model = Answer::class;
    public $view = 'answers';
    public $route = 'answer';
    public $create_validation = [
        'user_id' => 'required',
        'ask_id' => 'required',
        'text' => 'required',
    ];
    public $edit_validation = [
        'user_id' => 'required',
        'ask_id' => 'required',
        'text' => 'required',
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
            'asks' => Ask::orderBy('id', 'desc')->get(),
        ];
    }
}
