<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    public function AllAgent()
    {
        $user=User::all();
        return view('admin.agent.agent',['users'=>$user]);
    }
}

