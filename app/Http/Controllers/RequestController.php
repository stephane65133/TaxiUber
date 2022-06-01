<?php

namespace App\Http\Controllers;
use App\Models\Requested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        return view('request_create');
    }

    public function show()
    {
        $request = Requested::where('status','pending')->get();
        return view('requests')->with('requests' , $request);
    }

    public function create(Request $request){
        //dd($request);
        $request->validate([
            'depart' => 'required|string|max:150',
            'arrive' => 'required|string|max:150',
            'prix' => 'required|string|max:150',
            'etat' => 'required|string|max:30',
            'type_vehicule' => 'required|string',
        ]);

        $data = [
            'depart' => $request->depart,
            'arrive' => $request->arrive,
            'prix' => $request->prix,
            'type_vehicule' => $request->type_vehicule,
            'etat' => $request->etat,
            'status' => 'pending',
            'user_id' => Auth::user()->id
        ];

        //dd($data);
        return Requested::create([
            'depart' => $request->depart,
            'arrive' => $request->arrive,
            'prix' => $request->prix,
            'type_vehicule' => $request->type_vehicule,
            'etat' => $request->etat,
            'status' => 'pending',
            'user_id' => Auth::user()->id
        ]);

    }
}
