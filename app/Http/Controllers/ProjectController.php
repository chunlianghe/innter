<?php

namespace App\Http\Controllers;

use App\Http\Model\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = DB::select('SELECT categories.title AS cate_title,projects.*
                                FROM projects
                                Inner JOIN categories on projects.project_fk_category_id = categories.category_id;');
        return view('project.index')->with('data',$projects);
    }

    //get. project/create
    public function create()
    {
        $projects = DB::select('SELECT *
                                FROM categories');
//        dd($projects);
        return view('project/addProject')->with('data',$projects);
    }

    //post. category    save category
    public function store()
    {
        $input = Input::except('_token');
//        dd($input);

        $rules = [
            'title' => 'required',
            'url' => 'required',
            'project_fk_category_id' => 'required',
        ];

        $message = [
            'title.required' => 'The title is required!',
            'url.required' => 'The url is required!',
            'project_fk_category_id.required' => 'The category is required!',
        ];

        $validator = Validator::make($input, $rules, $message);

        if ($validator->passes()) {

            $res = Project::create($input);
            if ($res) {
                return redirect('project');
            }
        } else {
            return back()->withErrors($validator);
        }
    }
}
