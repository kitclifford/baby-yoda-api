<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use App\BabyYoda; //model babyYoda
use App\Feed;
use App\Http\Resources\FeedRecource;
use App\Http\Resources\BabyYodaResource;
use App\Http\Resources\BabyYodaFeedResource;
use App\Http\Requests\BabyYodaRequest;

use Illuminate\Http\Request;

class BabyYodas extends Controller
{
    
    public function index()
    {
        return BabyYodaResource::collection(BabyYoda::all());
    }


    public function store(BabyYodaRequest $request)
    {
        $data = $request->all();
        $babyYoda = BabyYoda::create($data);
        return new BabyYodaResource($babyYoda);
    }

    public function show(BabyYoda $babyYoda)
    {
        return new BabyYodaResource($babyYoda);
    }

    public function show_feeds(BabyYoda $babyYoda)
    {

        $feeds = BabyYodaFeedResource::Collection($babyYoda->feeds);
        $sorted_feeds = $feeds->sort (function ($a, $b) {
            return $a > $b ? -1 : 1 ;
         });

         return $sorted_feeds;
    }

    public function update(BabyYodaRequest $request, BabyYoda $babyYoda)
    {
        $data = $request->all();
        $babyYoda->fill($data)->save();
        return new BabyYodaResource($babyYoda);
    }

    public function destroy(BabyYoda $babyYoda)
    {
        $babyYoda->delete();
        return response(null, 204);
    }
}
