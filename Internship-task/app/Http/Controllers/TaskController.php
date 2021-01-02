<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
  
            $name = $request->input('name');
            $task_name = $request->input('task-name');
            $task_type = $request->input('task-type');

            Tasks::create(
                [
                    'user_name' => $name,
                    'task_name' => $task_name,
                    'task_type' => $task_type,
                ]
                );    
                
                return redirect()->back();         
    }
}
