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

Route::get('/students', function () {
$arr= [
     'students' => [
        [
         'id' => 1,
         'name' => 'Sara',
         "age" => "21",
         "secion"=> "CS",
        ],
        [
            'id' => 2,
            "name" => "aya",
            "age" => "23",
            "secion"=> "IS",
        ],
        [
            'id' => 3,
            "name" => "Reham",
            "age" => "21",
            "secion"=> "CS",
        ],
        [
            'id' => 4,
            "name" => "Menna",
            "age" => "20",
            "secion"=> "IT",
        ]

   ]
   ];


    return view('student',$arr);
});
