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

$router->group(["prefix" => "baby_yoda"], function ($router) {

    $router->post("", "BabyYodas@store");
    $router->get("", "BabyYodas@index"); // get all yodas
    $router->get("{babyYoda}", "BabyYodas@show"); // to get a single yoda
    $router->delete("{babyYoda}", "BabyYodas@destroy"); // kill a single yoda 
    $router->post("/{babyYoda}/feed", "Feeds@store");  // to feed specific yoda 
    $router->get("/{babyYoda}/feeds", "BabyYodas@show_feeds"); // get all feeds for a single yodas in decending order
    $router->get("/find/{yodaName}", "BabyYodas@find_yoda");//find a baby yoda by name (name from app form)
});
