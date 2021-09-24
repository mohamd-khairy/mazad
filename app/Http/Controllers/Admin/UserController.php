<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MainController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends MainController
{
    public $model = User::class;
    public $view = 'users';
    public $route = 'user';
    public $create_validation = [
        'name_en' => 'required|min:3',
        'name_ar' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'phone' => 'required|unique:users,phone',
        'gender' => 'required|in:male,female',
        'birth_date' => 'nullable|date|before:today',
    ];
    public $edit_validation = [
        'name_en' => 'required|min:3',
        'name_ar' => 'nullable|min:3',
        'password' => 'nullable|min:6',
        'gender' => 'nullable|in:male,female',
        'birth_date' => 'nullable|date|before:today',
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
