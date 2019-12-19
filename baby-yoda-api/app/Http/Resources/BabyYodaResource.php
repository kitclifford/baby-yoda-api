<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BabyYodaResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "colour" => $this->colour,
            "alive" => $this->alive,
            "dob" => $this->created_at->timestamp,
            "feeds" => $this->feeds,
            "latest_feed" => $this->latest_feed,
        ];
    }
}
