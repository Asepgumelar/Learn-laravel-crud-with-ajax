<?php

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

use App\Link;

use Illuminate\Http\Request;

Route::get('/', function () {
    $links = Link::all();
    return view('laracrud')->with('links', $links);
});
Route::post('/links', function (Request $request) {
    $link = Link::create($request->all());
    return Response::json($link);
});
Route::get('/links/{link_id?}', function ($link_id) {
    $link = Link::find($link_id);
    return Response::json($link);
});
 
//--UPDATE a link--//
Route::put('/links/{link_id?}', function (Request $request, $link_id) {
    $link = Link::find($link_id);
    $link->url = $request->url;
    $link->description = $request->description;
    $link->save();
    return Response::json($link);
});
Route::delete('/links/{link_id?}', function ($link_id) {
    $link = Link::find($link_id);
    return Response::json($link);
});
