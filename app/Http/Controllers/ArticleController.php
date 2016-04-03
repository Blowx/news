<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Http\Requests;
use App\Http\Requests\NewsRequest;

class ArticleController extends Controller
{

    public function index(Note $id)
    {
        return view('article.show')->withId($id);
    }

    public function edit(Note $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Note $article, NewsRequest $request)
    {
        $article->update($request->all());

        return redirect()->back();
    }
}
