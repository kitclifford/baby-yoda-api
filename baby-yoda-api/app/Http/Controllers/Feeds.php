<?php

namespace App\Http\Controllers;
use App\BabyYoda;
use App\Feed;

use Illuminate\Http\Request;

class Feeds extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BabyYoda $babyYoda)
    {
        return $babyYoda->feeds;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BabyYoda $babyYoda)
    {
        $feed = new Feed($request->all());

        $babyYoda->feeds()->save($feed);

        return $feed;
    }
}
