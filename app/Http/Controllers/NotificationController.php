<?php

namespace App\Http\Controllers;

use App\Notifications\CreateNewTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $user->notify(new CreateNewTask($user));
    }
}
