<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class DbController extends Controller
{
    public function index()
    {
        $db = DB::table('news')->insert('');
    }
}
