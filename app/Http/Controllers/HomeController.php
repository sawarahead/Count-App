<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class HomeController extends Controller
{
    public function Top(Type $type)
    {
        return view('Home.top')->with(['types'=>$type->get()]);
    }
    
    
    public function Record()
    {
        return view('Record.record');
    }
    
    public function edit(Type $type)
    {
        return view('Type.edit')->with(['type'=>$type]);
    }
}
