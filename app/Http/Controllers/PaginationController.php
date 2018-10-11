<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->paginate(10);

        return view('tasks.paginate', compact('tasks'));
    }
}
