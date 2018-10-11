<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $task = Task::find($request->id);

        Comment::create([
            'body' => request('body'),
            'task_id' => $task->id
        ]);

        return back();
    }
}
