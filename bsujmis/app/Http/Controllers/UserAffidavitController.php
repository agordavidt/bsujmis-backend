<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Affidavit;
use Illuminate\Support\Str;

class UserAffidavitController extends Controller
{
    //
    public function create() {
        return view ('public.create');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'court_location' => 'required|string|max:255',
           
        ]);

        Affidavit::create([
            'first_name' => $request->first_name,            
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'category' => $request->category,
            'court_location' => $request->court_location,
        ]);

        return redirect()->route('dashboard')->with('success', 'Affidavit submitted successfully!');
    }

}
