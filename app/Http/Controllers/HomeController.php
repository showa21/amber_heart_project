<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;



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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('home',[
            'User' => $user
        ]);
        
    }
  
    public function info()
    {
        return view('info');
    }
}
