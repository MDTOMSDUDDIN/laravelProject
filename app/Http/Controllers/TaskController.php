<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
        [
            'id' => 1,
            'name' => 'task 1',
            'description' => 'this is a description',
        ],
        [
            'id' => 2,
            'name' => 'task 2',
            'description' => 'this is a description',
        ],
        [
            'id' => 3,
            'name' => 'task 3',
            'description' => 'this is a description 3',
        ],
        [
            'id' => 4,
            'name' => 'task 4',
            'description' => 'this is a description 4',
        ],
        [
            'id' => 5,
            'name' => 'task 5',
            'description' => 'this is a description 5',
        ],
    ];
    function index(Request $request)
    {
        // return response()->json($this->tasks);
        // return view('hello');
         $total=count($this->tasks);
         $name='tomasuddin';
        $totaltasks = count($this->tasks);
        // return view('tasks.alltasks', ['name' => 'jhon doe', 'total' => $totaltasks * 100]);
        return view('tasks.alltasks', ['tasks'=>$this->tasks]);

        //  return view('tasks.alltasks',compact('name','total'));
        
    }
}
