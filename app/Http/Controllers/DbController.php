<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class DbController extends Controller
{
    public function index()
    {
        $results = DB::table('news')->get();
        //dd($results);

        return view('index', compact('results'));
    }

    public function indx()
    {

        $articles = DB::table('news')
                ->get();

        dd($articles);
    }

}
