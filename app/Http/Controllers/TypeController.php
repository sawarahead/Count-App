<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function getAddType(Type $type)
    {
        return view('addType')->with(['types'=>$type->get()]);
    }
    
    public function postAddType(Request $request, Type $type)
    {
        $input=$request['typeName'];
        $type->fill(['typeName'=>$input])->save();
        return redirect('/');
    }
}
