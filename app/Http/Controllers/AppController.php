<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    public function AllAgent(User $users)
    {
        return view('admin.agent.agent',compact('users'));
    }
}

