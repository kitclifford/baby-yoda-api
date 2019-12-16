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

$router->group(["prefix" => "babyYoda"], function ($router) {

    $router->post("", "BabyYodas@store");
    $router->get("", "BabyYodas@index");// get all book
    $router->get("{babyYoda}", "BabyYodas@show");// to get a single yoda
    $router->put("{babyYoda}", "BabyYodas@update"); // update selected id yoda - url/idnumber
    $router->delete("{babyYoda}", "BabyYodas@destroy");
     // $router->get("/{book_id}/books", "BabyYodas@show_shops"); // not sure of this now
});