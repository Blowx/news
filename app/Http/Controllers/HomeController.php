<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\HTTP\Requests\NewsRequest;
use App\Note;
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


    public function index()
    {
        return view('home');
    }

    public function postIndex(NewsRequest $r)
    {
        //print_r($_POST);
        $r['user_id']=Auth::user()->id;
        Note::create($r->all());
        return view('home');
    }
}
