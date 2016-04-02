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
    const PER_PAGE = 10;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //$results = DB::table('news')->get();
        $results = Note::all();
        //dd($results);

        return view('db.index', compact('results'));
    }

    public function form()
    {
        return view('db.form');
    }

    public function postIndex(NewsRequest $request)
    {
        $request['user_id']=Auth::user()->id;
        Note::create($request->all());
        return view('db.form'); // ??????? ? ?????????
        /*DB::table('news')->insert($request->except(['_token']));
        return redirect()->back();*/ // ??????? ??? ???????
    }


}
