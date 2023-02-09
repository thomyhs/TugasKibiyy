<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::all();
        $users = User::get();
        return view('hume')->with('users', $users);
    }

    public function coba($id)
    {
        $users = User::find($id);
        $users1 = User::where('id', $id)->first();
        // return view('home')->with('users', $users);
        return view('hume', compact('users', 'users1'));
    }
}
