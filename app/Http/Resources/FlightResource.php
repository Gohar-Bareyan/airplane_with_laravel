<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'from_country_id' => $this->from_country_id,
            'to_country_id' => $this->to_country_id,
            'datetime' => $this->datetime,
            'airplane_id' => $this->airplane_id,
            'from_country' => $this->from_country,
            'to_country' => $this->to_country,
            'airplane' => $this->airplane
        ];
    }
}
