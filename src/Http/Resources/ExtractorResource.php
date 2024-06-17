<?php

namespace Raykazi\Seat\PI\Http\Resources;

use Seat\Api\Http\Resources\Json\JsonResource;

class ExtractorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'character_id' => $this->character_id,
            'planet_id' => $this->planet_id,
            'pin_id' => $this->pin_id,
            'product_type_id' => $this->product_type_id,
            'product_name' => $this->product->typeName,
            'cycle_time' => $this->cycle_time,
            'head_radius' => $this->head_radius,
            'qty_per_cycle' => $this->qty_per_cycle,
            'pin' => $this->pin,
        ];
    }
}