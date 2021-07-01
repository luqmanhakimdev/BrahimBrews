<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\CabFlavor;
use App\Models\Agent;

class AppController extends Controller
{
    public function AllAgent()
    {
        $agent = Agent::all();
        $agent = Agent::paginate(10);
        return view('admin.agent.agent',['agents'=>$agent]);
    }
    public function AddAgentPage()
    {
        return view('admin.agent.addagent');
    }

    public function UpdateAgent(Request $req)
    {   
        $data = Agent::find($req->id);
        $data->email = $req->email;
        $data->city = $req->city;
        $data->state = $req->state;
        $data->divison_id = $req->divison_id;
        $data->save();
        return redirect()->back();
    }

    public function DeleteAgent($id)
    {

       $data = Agent::find($id);
       $data->delete();
       return redirect ('agent');

    }

    public function AddAgent(Request $req)
    {
        $validated = $req -> validate(
        [
            'name' => 'required|max:100',
            'email' => 'required',
            'ic' => 'required',
            'state' => 'required',
            'city' => 'required',
            'divison_id' => 'required',

        ],
        [
            'name.required' => 'Name required.',
            'email.required' => 'Email required.',
            'ic.required' => 'IC required.',
            'state.required' => 'State required.',
            'city.required' => 'City required.',
            'divison_id.required' => 'Agent type required.',
        ]);

        $data = new Agent;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->ic = $req->ic;
        $data->city = $req->city;
        $data->state = $req->state;
        $data->divison_id = $req->divison_id;
        $data->save();
        return redirect('agent');

    }

    public function UpdateStock(Request $req)
    {   
        $data = CabFlavor::find($req->id);
        $stock_in = $req->stock_in;
        $stock_out = $req->stock_out;
        $stock_left = $req->stock_left;
        $final = $stock_left+$stock_in-$stock_out;
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

        $validated = $req->validate(
        [
            'add_flavor' => 'required|max:255',
        ],
        [
            'add_flavor.required' => 'Please insert flavor name.'
        ]);
        
        $data = new CabFlavor;
        $data->flavor_name = $req->add_flavor;
        $data->stock = 0;
        $data->save();
        return redirect ('dashboard');    
    }

    public function DeleteFlavor($id)
    {

       $data = CabFlavor::find($id);
       $data->delete();
       return redirect ('dashboard');

    }
    public function searchlive(Request $request_val)
{
        $search_val = $request_val->id;
        if (is_null($search_val))
        {
            return view('demos.searchlive');
        }
        else
        {
            $posts_data = Post::where('title','LIKE',"%{$search_val}%")->get();
            return view('demos.searchLiveajax')->withPosts($posts_data);
        }
}

    public function SearchAgent()
    {
        $agent = Agent::all();
        $agent = Agent::paginate(10);
        return view('admin.agent.search',['agents'=>$agent]);
    }
}

