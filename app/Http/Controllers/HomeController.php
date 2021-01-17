<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index(Request $r)
    {
        //Different views depending on if you are borrower or librarian
        if(Auth::user()->librarian_id!=NULL)
        {
            return view('home', ['option'=>$r['option']]);
        }
        else
        {
            return $this->borrower();
        }
    }
    public function borrower()
    {
        if(Auth::user()->borrower_id!=NULL)
        {
            return view('borrower');
        }
        else
        {
            return view('welcome');
        }
    }
}
