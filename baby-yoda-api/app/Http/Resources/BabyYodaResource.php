<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BabyYodaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->title,
            "colour" => $this->article,
            "health" => $this->health,
            "age" => $this->age,
            "alive" => $this->alive,
            "created_at" => $this->created_at
        ];
    }
}
