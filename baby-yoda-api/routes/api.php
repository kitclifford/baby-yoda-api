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

    $router->post("", "BabyYodas@store"); // store a yoda, needs name and colour 

    $router->get("", "BabyYodas@index"); // get all yodas

    $router->get("{babyYoda}", "BabyYodas@show"); // to get a single yoda (by ID)

    $router->delete("{babyYoda}", "BabyYodas@destroy"); // delete a specific yoda (by ID)

    $router->post("/{babyYoda}/feed", "Feeds@store");  // to feed specific yoda (by ID)

    $router->get("/{babyYoda}/feeds", "BabyYodas@show_feeds"); // get all feeds for a single yoda (by ID) in decending order

    $router->get("/find/{yodaName}", "BabyYodas@find_yoda");//find a baby yoda by name, get name, colour, dob and last feed in Unix time
});