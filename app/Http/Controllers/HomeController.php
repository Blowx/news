<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\HTTP\Requests\NewsRequest;
use App\Note;
use DB;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $results = DB::table('news')->get();
        //dd($results);

        return view('db.index', compact('results'));
    }

    public function form()
    {
        return view('db.form');
    }

    public function postIndex(NewsRequest $r)
    {
        $r['user_id']=Auth::user()->id;
        Note::create($r->all());
        return view('db.form');
    }


}
