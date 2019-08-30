<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::get('landing', function () { return view('landing'); });

Route::get('pricing', function () { return view('pricing'); });

Route::get('about', function () { return view('about'); });

Route::get('advanced', function () { return view('advanced'); });

Route::get('/back/{name}', function ($name) {
  $td = DB::table('entities')->where('name', 'like', '%' . $q . '%')->get();
  $entities = json_decode(json_encode($td), true);

  return view('home', [ 'entities' => $entities ]);
});

Route::any('search', function () {
    $q = Input::get('q');
    $td = DB::table('entities')->where('name', 'like', '%' . $q . '%')->get();
    $entities = json_decode(json_encode($td), true);

    return view('home', [ 'entities' => $entities ]);
})->name('search');

Route::any('advanced_search', function () {
    $q = Input::get('q');
    $td = DB::table('entities')->where('name', 'like', '%' . $q . '%')->get();
    $entities = json_decode(json_encode($td), true);

    return view('home', [ 'entities' => $entities ]);
})->name('advanced_search');

Route::get('/entity/{id}', function($id) {
  $selected = DB::table('entities')->where('id',$id)->first();
  return view('entity', ['selected' => $selected]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
