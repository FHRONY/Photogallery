<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home; //idk

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //unauthorized access block
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index1()
{
    $user_id = auth()->user()->id;

    $user = User::find($user_id);

    return view('login');
}
}
