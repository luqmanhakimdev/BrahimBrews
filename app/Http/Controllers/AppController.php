<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\CabFlavor;

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
        $data=CabFlavor::find($req->id);
        $stock_in=$req->stock_in;
        $stock_out=$req->stock_out;
        $stock_left=$req->stock_left;
        $final=$stock_left+$stock_in-$stock_out;
        if ($final<0)
        {
            return view('stockerror');
        }
        $data->stock=$final;
        $data->save();
        return redirect('dashboard');
    }
    public function AddFlavor(Request $req)
    {
        $validatedData = $req->validate
        ([
        'add_flavor' => 'required|unique:posts|max:255',
        ],
        [
        'add_flavor.required' => 'Flavor required.',
        ]
        );

        // Flavor::insert
        // ([
        //     'flavor_name' => $req->add_flavor,
        //     'stock' => 0,

        // ]);
        // $query = DB::table('flavors')->insert
        // ([
        //     'flavor_name'->$req->input('add_flavor')
        // ]);

    }
}

