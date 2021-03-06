<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            "baby_yoda_id" => $this->id,
            "created_at" => $this->created_at,
            "fed_at" => $this->updated_at->timestamp,
            "feeds" => $this->feeds,
        ];
    }
}
