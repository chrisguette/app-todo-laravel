<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class taskController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Task::where('user_id', auth()->id())->get();
    }

    
    
    public function store(Request $request)
    {
        $task = new Tastk();
        $task->description = $request->description;
        $task->save();

        return $task;
    }

    
     
 
     
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->description = $request->description;
        $task->save();
    }

    
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
