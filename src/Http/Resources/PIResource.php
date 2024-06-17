<?php

namespace Raykazi\Seat\PI\Http\Resources;

use OpenApi\Attributes as OA;
use Seat\Api\Http\Resources\Json\JsonResource;

#[OA\Schema(
    schema: 'PlanetInteraction',
    title: 'Planet Interaction',
    description: 'Details of planet interaction including extractors and pins',
    type: 'object',
    properties: [
        new OA\Property(
            property: 'planet_name',
            description: 'Name of the planet',
            type: 'string'
        ),
        new OA\Property(
            property: 'region',
            description: 'Region where the planet is located',
            type: 'string'
        ),
        new OA\Property(
            property: 'planet_type',
            description: 'Type of the planet',
            type: 'string'
        ),
        new OA\Property(
            property: 'num_pins',
            description: 'Number of pins on the planet',
            type: 'integer'
        ),
        new OA\Property(
            property: 'planet_id',
            description: 'ID of the planet',
            type: 'integer'
        ),
        new OA\Property(
            property: 'solar_system_id',
            description: 'ID of the solar system',
            type: 'integer'
        ),
        new OA\Property(
            property: 'upgrade_level',
            description: 'Upgrade level of the planet',
            type: 'integer'
        ),
        new OA\Property(
            property: 'extractors',
            description: 'List of extractors on the planet',
            type: 'array',
            items: new OA\Items(ref:"#/components/schemas/Extractor")
        )
    ]
)]

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

class PIResource extends JsonResource
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
            'planet_name'=>$this->planet->name,
            'region'=>$this->solar_system->region->name,
            'planet_type' => $this->planet_type,
            'num_pins' => $this->num_pins,
            'planet_id' => $this->planet_id,
            'solar_system_id' => $this->solar_system_id,
            'upgrade_level' => $this->upgrade_level,
            'extractors' => ExtractorResource::collection($this->extractors),
        ];
    }
}
