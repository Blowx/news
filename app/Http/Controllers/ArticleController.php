<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Http\Requests;

class ArticleController extends Controller
{

    public function index(Note $id)
    {
        return view('article')->withId($id);
    }
}
