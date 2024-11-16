<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // General dashboard
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function judge()
    {
        return view('judge.dashboard');
    }

    public function clerk()
    {
        return view('clerk.dashboard');
    }

    public function attorney()
    {
        return view('attorney.dashboard');
    }

    public function public()
    {
        return view('public.dashboard');
    }
}
