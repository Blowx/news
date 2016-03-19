<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DbController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get;

        return View('db.index', compact($news));
    }
}
