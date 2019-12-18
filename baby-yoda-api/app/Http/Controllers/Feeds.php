<?php

namespace App\Http\Controllers;
use App\BabyYoda;
use App\Feed;

use Illuminate\Support\Collection;
use App\Http\Resources\FeedResource;
use App\Http\Resources\BabyYodaResource;
use App\Http\Resources\BabyYodaFeedResource;

use Illuminate\Http\Request;

class Feeds extends Controller
{

    public function index(BabyYoda $babyYoda)
    {
        $ordered_feeds = Feed::find($babyYoda);
        $ordered_feeds = Feed::orderBy('created_at', 'DESC')->get();
        return FeedResource::Collection($ordered_feeds); //get all feeds by decending order
    }

    public function store(Request $request, BabyYoda $babyYoda)
    {
        $feed = new Feed($request->all());
        $babyYoda->feeds()->save($feed);
        return new  FeedResource($feed);
    }

    public function show(BabyYoda $babyYoda)
    {
        return new FeedResource($babyYoda);
    }
}
