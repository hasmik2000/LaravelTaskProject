<?php

namespace App\Http\Controllers;

use App\Country;
use App\Task;
use App\User;
use function foo\func;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index($id)
    {
        $country  = Country::find($id);

        $tasks = $country->tasks;

        return view('country.show', compact('tasks'));
    }
}
