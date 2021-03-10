<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function create(Type $type)
    {
        return view('Type.create')->with(['types'=>$type->get()]);
    }
    
    public function store(Request $request, Type $type)
    {
        $input=$request['typeName'];
        $type->fill(['typeName'=>$input])->save();
        return redirect('/');
    }
    
    public function show(Type $type)
    {
        return view('Type.show')->with(['type'=>$type]);
    }
}
