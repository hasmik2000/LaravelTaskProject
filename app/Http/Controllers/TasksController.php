<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
//        $tasks = DB::table('tasks')->paginate(15);

        return view('tasks.task', compact('tasks'));
    }
}
