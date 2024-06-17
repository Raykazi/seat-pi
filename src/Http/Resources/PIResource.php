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
//        new OA\Property(
//            property: 'extractors',
//            description: 'List of extractors on the planet',
//            ref: '#/components/schemas/Extractors'
//        )
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
