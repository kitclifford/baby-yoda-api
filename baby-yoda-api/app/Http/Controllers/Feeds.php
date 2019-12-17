<?php

namespace App\Http\Controllers;
use App\BabyYoda;
use App\Feed;

use Illuminate\Support\Collection;
use App\Http\Resources\FeedResource;

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
        $ordered_feeds = Feed::all();
        $ordered_feeds = Feed::orderBy('created_at', 'DESC')->get();
        return FeedResource::Collection($ordered_feeds);
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
