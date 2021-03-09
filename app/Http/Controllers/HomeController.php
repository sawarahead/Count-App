<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class HomeController extends Controller
{
    public function getTop(Type $type)
    {
        return view('top')->with(['types'=>$type->get()]);
    }
    
    
    
    public function getRecord()
    {
        return view('record');
    }
    
    public function getEdit(Type $type)
    {
        return view('edit')->with(['type'=>$type->get()]);
    }
}
