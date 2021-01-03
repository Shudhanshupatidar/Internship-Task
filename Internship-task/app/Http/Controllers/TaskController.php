<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
  
            $user = $request->input('name');
            $user = explode (",", $user);   // user id is seprating from string name e.g. 1, John
            $user_id = $user[0]; // user id e.g. 1
            $name = $user[1]    // user name e.g. John
;            $task_name = $request->input('task-name');
            $task_type = $request->input('task-type');

            Tasks::create(
                [
                    'user_name' => $name,
                    'task_name' => $task_name,
                    'task_type' => $task_type,
                    'user_id' => $user_id,
                ]
                );    
                
                return redirect()->back()->with('message', 'Task Assigned !!');
    }
}
