<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /*Show Task Dashboard*/
    public function getTasks()
    {
        $tasksArray = Task::all();
        return view('tasks', ['tasks' => $tasksArray]);
    }

    //  * Add New Task

    public function addTasks(Request $request) {
        $newTask = new Task ();
        $newTask->name = $request->input('name');
        $newTask->save();
        $tasksArray = Task::all();
        return view('tasks', ['tasks' => $tasksArray]);
    }

     // * Delete Task

     public function delTasks(Request $request, $id) {
        Task::find($id)->delete();        
        $tasksArray = Task::all();
        return view('tasks', ['tasks' => $tasksArray]);
     }
}
