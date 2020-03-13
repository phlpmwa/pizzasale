<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index()
    {
        $pizzas=[
   ['type'=>'hawaiian','base'=>'classic'],
   ['type'=>'hawaiffian','base'=>'clasffsic'],
   ['type'=>'hawaiffian','base'=>'classffic']
    ];
    $name= request('name');
    $age= request('name');
    return view ('pizzas',[ 
        'pizzas'=>$pizzas,
        'name'=>$name,
        'age'=>$age
                ]);
    }

    public function show($id)
    {
        return view('details',['id'=>$id]);
    }
}
