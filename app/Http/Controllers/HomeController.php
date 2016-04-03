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
        $results = DB::table('news')->paginate(15);
        //$results = Note::paginate(3);
        //dd($results);

        return view('article.index', compact('results'));
    }

    public function form()
    {
        return view('article.create');
    }

    public function postIndex(NewsRequest $request)
    {
        $request['user_id']=Auth::user()->id;
        Note::create($request->all());
        return view('article.create');
        /*DB::table('news')->insert($request->except(['_token']));
        return redirect()->back();*/
    }


}
