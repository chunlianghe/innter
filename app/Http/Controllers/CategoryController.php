<?php

namespace App\Http\Controllers;

use App\Http\Model\Category;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //get. admin/category   all categories
    public function index()
    {
        $categories = Category::all();
//       dd($categories);
        return view('category.index')->with('data', $categories);
    }

    //get. admin/category/create
    public function create()
    {
        return view('category/add');
    }

    //get. admin/category/{category}
    public function show()
    {

    }

    //delete. admin/category/{category}
    public function destroy()
    {

    }

    //put. admin/category/{category}
    public function update()
    {

    }

    //get. admin/category/{category}
    public function edit()
    {

    }

    //post. category    save category
    public function store()
    {
        $input = Input::except('_token');
//        dd($input);

        $rules = [
            'title' => 'required',
        ];

        $message = [
            'title.required' => 'The title is required!'
        ];

        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {

            $res = Category::create($input);
            if($res) {
                return redirect('category');
            }
        } else {
            return back()->withErrors($validator);
        }
    }


}
























