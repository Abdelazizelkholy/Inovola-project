<?php


namespace App\Models\Transformers\Api;

use App\Models\Agency;

use League\Fractal\TransformerAbstract;

class AgencyTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'news'
    ];

    public function transform(Agency $agency): array
    {
        /**
         *    name of Agency
         */
        $array = [
            'agencyName' => (string) $agency->name,
        ];

        return $array;
    }

    public function includeNews(Agency $agency): \League\Fractal\Resource\Collection
    {
        $program = $agency->news()->get();
        return $programs = $this->collection($program, new NewsTransformer());

    }

}
