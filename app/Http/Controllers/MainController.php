<?php
<<<<<<< HEAD
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
class MainController extends Controller
{
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{

>>>>>>> ae0b26ae641e4469281561644bba64bd66d63392
    public $names = [
        'Neo',
        'Morpheus',
        'Trin'
    ];
<<<<<<< HEAD
    public function main()
    {
        return View('hello')->withNames($this->names);
    }
}
=======


    public function main()
    {
        return View('index')->with('names', $this->names);
    }
}
>>>>>>> ae0b26ae641e4469281561644bba64bd66d63392
