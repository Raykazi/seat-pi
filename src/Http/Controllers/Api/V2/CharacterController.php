<?php

namespace Raykazi\Seat\PI\Http\Controllers\Api\V2;

use Seat\Api\Http\Controllers\Api\v2\ApiController;
use Raykazi\Seat\PI\Http\Resources\PIResource;
use Seat\Api\Http\Resources\Json\JsonResource;
use Seat\Eveapi\Models\PlanetaryInteraction\CharacterPlanet;
use Seat\Eveapi\Models\PlanetaryInteraction\CharacterPlanetExtractor;
use Seat\Eveapi\Models\PlanetaryInteraction\CharacterPlanetPin;

/**
 * Class CharacterController.
 */
class CharacterController extends ApiController
{
    #[OA\Get(
        path: '/v2/seat-pi/planets/{character_id}',
        description: 'Returns a character PI planets',
        summary: 'Get the PI planets for a character',
        security: [
            [
                'ApiKeyAuth' => [],
            ],
        ],
        tags: ['Character','SeAT PI'],
        parameters: [
            new OA\Parameter(name: 'character_id', description: 'Character ID', in: 'path', required: false, schema: new OA\Schema(type: 'integer')),
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Successful operation',
                content: new OA\JsonContent(
                    type: 'object'
                )
            ),
            new OA\Response(response: 400, description: 'Bad request'),
            new OA\Response(response: 401, description: 'Unauthorized'),
        ]
    )]
    public function getPlanets(int $character_id)
    {
        $query = CharacterPlanet::where('character_id', $character_id);
        $planets = $query->paginate();
        return PIResource::collection($planets);
    }
}
