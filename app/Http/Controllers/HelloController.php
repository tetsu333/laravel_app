<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Person;
use App\Sample;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    public function index()
    {
        $myservice = app('App\MyClasses\MyService');
        $data = [
            'msg'=> $myservice->say(),
            'data'=> $myservice->data(),
        ];
        return view('hello.index',$data);
    }
}
