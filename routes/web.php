<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', function () {
    $pizzas=[
   ['type'=>'hawaiian','base'=>'classic'],
   ['type'=>'hawaiffian','base'=>'clasffsic'],
   ['type'=>'hawaiffian','base'=>'classffic']
    ];

    $name= request('name');
    $AGE= request('name');
    /*
    $pizza=['type'=>'hawaiian',
    'base'=>'classic',
    'price'=>10
];
    return view('pizzas',$pizza);
    //return view('pizzas',['type'=>'hawaiian','base'=>'classic']);
    //return string
    //return "pizzas";
    //return json
    //return ['name'=>'veg pizzas','base'>'classic'];
    */

    return view ('pizzas',[ 
        'pizzas'=>$pizzas,
        'name'=> request('name'),
        'age'=> request('age'),
        ]);

});
Route::get('/pizzas/{id}', function ($id) {
    //use the $id variable to query the db for a record
    return view('details',['id'=>$id]);
});

