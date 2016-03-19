<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class MainController extends Controller
{


    public $names = [
        'Neo',
        'Morpheus',
        'Trin'
    ];

    public function main()
    {
        return View('hello')->withNames($this->names);
    }

}

