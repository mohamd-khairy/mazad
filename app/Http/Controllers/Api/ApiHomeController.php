<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\MazadResource;
use App\Http\Traits\HelperTrait;
use App\Models\Answer;
use App\Models\Ask;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Mazad;
use Illuminate\Http\Request;

class ApiHomeController extends Controller
{
    use HelperTrait;

    public function get_public_data()
    {

        $categories = $this->get(Category::class);

        $category_mazad = [];
        foreach ($categories as $key => $value) {
            $category_mazad[$key]['id'] = $value->id;
            $category_mazad[$key]['name'] = $value->name;
            $category_mazad[$key]['data'] = $this->getBy(Mazad::class, ['category_id' => $value->id], ['image']);
        }

        $data = [];
        $data['category_mazad'] = $category_mazad;
        $data['categories'] = $categories;
        $data['mazads'] = $this->get(Mazad::class);

        return responseSuccess($data);
    }

    public function get_mazads()
    {
        if (request('mazad_id')) {
            $data = new MazadResource($this->findWith(Mazad::class, ['id' => request('mazad_id')], ['user', 'category']));
            if (!$data) {
                return responseFail('there is no mazad with this id');
            }
        } else {
            $data = MazadResource::collection($this->get(Mazad::class, ['user', 'category']));
        }
        return responseSuccess($data);
    }

    public function get_categories()
    {
        if (request('category_id')) {
            $data = new GeneralResource($this->findWith(Category::class, ['id' => request('category_id')], ['mazads']));
            if (!$data) {
                return responseFail('there is no category with this id');
            }
        } else {
            $data = GeneralResource::collection($this->get(Category::class, ['mazads']));
        }
        return responseSuccess($data);
    }

    public function get_comments($mazad_id)
    {
        $data = $this->getBy(Comment::class, ['mazad_id' => $mazad_id], ['user']);
        return responseSuccess(CommentResource::collection($data));
    }


    public function add_mazad(Request $request)
    {
        $data = $this->add(Mazad::class, $request->all() + ['user_id' => auth('api')->user()->id]);

        return responseSuccess($data);
    }

    public function add_comment(Request $request)
    {
        $data = $this->add(Comment::class, $request->all() + ['user_id' => auth('api')->user()->id]);

        return responseSuccess($data);
    }

    public function add_ask(Request $request)
    {
        $data = $this->add(Ask::class, $request->all() + ['user_id' => auth('api')->user()->id]);

        return responseSuccess($data);
    }

    public function add_answer(Request $request)
    {
        $data = $this->add(Answer::class, $request->all() + ['user_id' => auth('api')->user()->id]);

        return responseSuccess($data);
    }
}
