<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BabyYodaFeedResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id, 
            "fed_at" => $this->updated_at->timestamp,
        ];
    }
}
