<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getTop()
    {
        return view('top');
    }
    
    public function getAddType()
    {
        return view('addType');
    }
    
    public function getRecord()
    {
        return view('record');
    }
}
