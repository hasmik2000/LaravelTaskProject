<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\CreateTaskSuccess;
use App\Mail\NewTask;
use App\Notifications\DeleteTask;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notification;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $tasks = User::find($user_id)->tasks;

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name');

        return view('tasks.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $data = $request->all();

        $task = Auth::user()->tasks()->create($data);

        $category_name = $request->category;

        $category = Category::where('name', $category_name)->first();

        $task->categories()->attach($category);

        Mail::to($request->user())->send(new NewTask($task));

        Session::flash('message', 'Task successfully added!');

        return redirect("profile");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('message', 'Task successfully updated!');

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        $user = Auth::user();

        $user->notify(new DeleteTask($user));

        Session::flash('message', 'Task successfully deleted!');

        return redirect('profile');
    }
}
