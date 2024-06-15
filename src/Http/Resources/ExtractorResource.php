<?php

namespace Raykazi\Seat\PI\Http\Resources;

use Seat\Api\Http\Resources\Json\JsonResource;

class ExtractorResource extends JsonResource
{
    #[OA\Schema(
        schema: 'Extractor',
        title: 'Extractor',
        description: 'Details of an extractor',
        type: 'object',
        properties: [
            new OA\Property(
                property: 'character_id',
                description: 'ID of the character',
                type: 'integer'
            ),
            new OA\Property(
                property: 'planet_id',
                description: 'ID of the planet',
                type: 'integer'
            ),
            new OA\Property(
                property: 'pin_id',
                description: 'ID of the pin',
                type: 'integer'
            ),
            new OA\Property(
                property: 'product_type_id',
                description: 'Type ID of the product',
                type: 'integer'
            ),
            new OA\Property(
                property: 'cycle_time',
                description: 'Cycle time of the extractor',
                type: 'integer'
            ),
            new OA\Property(
                property: 'head_radius',
                description: 'Head radius of the extractor',
                type: 'number',
                format: 'float'
            ),
            new OA\Property(
                property: 'qty_per_cycle',
                description: 'Quantity per cycle',
                type: 'integer'
            ),
            new OA\Property(
                property: 'created_at',
                description: 'Creation timestamp',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'updated_at',
                description: 'Update timestamp',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'pin',
                description: 'Details of the pin',
                ref: '#/components/schemas/Pin'
            )
        ]
    )]

    #[OA\Schema(
        schema: 'Pin',
        title: 'Pin',
        description: 'Details of a pin',
        type: 'object',
        properties: [
            new OA\Property(
                property: 'character_id',
                description: 'ID of the character',
                type: 'integer'
            ),
            new OA\Property(
                property: 'planet_id',
                description: 'ID of the planet',
                type: 'integer'
            ),
            new OA\Property(
                property: 'pin_id',
                description: 'ID of the pin',
                type: 'integer'
            ),
            new OA\Property(
                property: 'type_id',
                description: 'Type ID of the pin',
                type: 'integer'
            ),
            new OA\Property(
                property: 'schematic_id',
                description: 'ID of the schematic',
                type: 'integer',
                nullable: true
            ),
            new OA\Property(
                property: 'latitude',
                description: 'Latitude of the pin',
                type: 'number',
                format: 'float'
            ),
            new OA\Property(
                property: 'longitude',
                description: 'Longitude of the pin',
                type: 'number',
                format: 'float'
            ),
            new OA\Property(
                property: 'install_time',
                description: 'Installation time of the pin',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'expiry_time',
                description: 'Expiry time of the pin',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'last_cycle_start',
                description: 'Last cycle start time',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'created_at',
                description: 'Creation timestamp',
                type: 'string',
                format: 'date-time'
            ),
            new OA\Property(
                property: 'updated_at',
                description: 'Update timestamp',
                type: 'string',
                format: 'date-time'
            )
        ]
    )]
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