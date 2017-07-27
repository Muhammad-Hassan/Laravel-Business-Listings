<?php

namespace App\Http\Controllers;

use App\User;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_auth_id = auth()->user()->id;
        $user_listing = User::find($user_auth_id)->listings;
        return view('home')->with('user_listing',$user_listing);
    }
}
