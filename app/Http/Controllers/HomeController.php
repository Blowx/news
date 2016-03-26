<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\HTTP\Requests\NewsRequest;
use App\Note;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function postIndex(NewsRequest $r)
    {
        $r['user_id']=Auth::user()->id;
        Note::create($r->all());
        return view('form');
    }


}
