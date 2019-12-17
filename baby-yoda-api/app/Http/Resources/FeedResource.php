<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "baby_yoda_id" => $this->baby_yoda_id,
            "created_at" => $this->created_at,
            "fed_at" => $this->created_at->timestamp
        ];
    }
}
