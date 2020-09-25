<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function home(Request $request, User $user)
    {
        $user_count = User::all();
        $username = $request->user()->name;
        return view('frontview.layouts.home',compact('username','user_count'));

    }
}
