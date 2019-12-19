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
        //find out whether the name exists
    
        if(BabyYoda::where('name', $request->name)->exists()){
           return [ "error" => "This yoda already exists. Find your yoda" ];
        } else{
            $babyYoda = BabyYoda::create($data);
            return new BabyYodaResource($babyYoda);
        }      
       
    }

    public function find_yoda($yodaName)
    {   


        // $feeds = BabyYodaFeedResource::Collection($yodaName->feeds);

        // $sorted_feeds = $feeds->sort (function ($a, $b) {
        //     return $a > $b ? -1 : 1 ;
        //  });

        // return $sorted_feeds;


        //this will get existing yoda by name
        $searched_yoda = BabyYoda::where('name', $yodaName)->get();
        
        if (count($searched_yoda) > 0){
            $baby_yoda_data = new BabyYodaResource($searched_yoda[0]); //an array searched by name
            $latest = 0;

            foreach($baby_yoda_data->feeds AS $feed){
                $unix_feed_time = strtotime($feed->created_at);
                if ($latest < $unix_feed_time){
                    $latest = $unix_feed_time;
                }
            }
            $baby_yoda_data->latest_feed = $latest;

            return new BabyYodaResource($baby_yoda_data);

        }else{
            return [ "error" => "This yoda does not exist!" ];
        }
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
