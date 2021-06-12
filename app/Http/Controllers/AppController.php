<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Flavor;

class AppController extends Controller
{
    public function AllAgent()
    {
        $user=User::all();
        return view('admin.agent.agent',['users'=>$user]);
    }

    public function ShowStock()
    {   
        $data=Flavor::find($id);
        return view('show.stock',['data'=>$data]);
    }

    public function UpdateStock(Request $req)
    {   
        $data=Flavor::find($req->id);
        $data->stock=$req->stock;
        
        $stock->save();
    }
}

