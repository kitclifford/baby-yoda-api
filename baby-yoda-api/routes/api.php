<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->group(["prefix" => "yoda"], function ($router) {

    $router->post("", "BabyYodas@store");
    $router->get("", "BabyYodas@index");// get all book
    $router->get("/{yoda_id}", "BabyYodas@show");// to get a single yoda
    $router->put("/{yoda_id}", "BabyYodas@update"); // update selected id yoda - url/idnumber
    $router->delete("/{yoda_id}", "BabyYodas@destroy");
     // $router->get("/{book_id}/books", "BabyYodas@show_shops"); // not sure of this now
});