<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        $tasks = Auth::user()->tasks()->whereHas('categories', function($query) use ($category){
            $query->where('id', $category->id);
        })->get();

        return view('tasks.index', compact('tasks'));
    }
}
