<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware;
use Illuminate\Http\Middleware\Old;

use Illuminate\Support\Facades\Auth;

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
       // $name = $request->input('name');
        return view('home');

/*      var_dump(Auth::user()->email);*/

    }
}
