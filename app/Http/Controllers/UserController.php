<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);

        $tasks = $user->tasks;

        return view('country.user', compact('tasks'));
    }
}
