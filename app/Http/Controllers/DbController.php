<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class DbController extends Controller
{
    public function index()
    {
        $results = \DB::select('select * from news');
        //dd($results);

        return View('db.index', compact('results'));
    }
}
