<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        
        if (auth()->id() == 1) {
            return view('admin.adminhome');
        }
    
        return view('dashboard');
        

    }
}
