<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('client')) {
            return view('client.index');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('admin.index');
        } elseif (Auth::user()->hasRole('super')) {
            return view('super.index');
        }
    }

    public function profile()
    {
        return view('profile');
    }
}