<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }

    function about() {

        $data = array('Bangladesh','India','Australia','Newzeland');
        return view('about',['data'=>$data]);
    }
}
