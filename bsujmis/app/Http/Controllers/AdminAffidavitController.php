<?php

namespace App\Http\Controllers;

use App\Models\Affidavit;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class AdminAffidavitController extends Controller
{
    public function index()
    {
        // Retrieve all affidavits using query builder
        // $all_affidavits = DB::table('affidavits')->get();

        // eloquent model 
        $all_affidavits = Affidavit::all();
        
        // Pass the retrieved affidavits to the view 
        return view('admin.dashboard', ['affidavits' => $all_affidavits]);
    }
}
