<?php

namespace App\Models\Serializer;

use League\Fractal\Serializer\DataArraySerializer;

class Serializer extends DataArraySerializer
{

    /**
     * Serialize a collection.
     *
     * @param  string  $resourceKey
     * @param  array  $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $data;
    }

    /**
     * Serialize an item.
     *
     * @param  string  $resourceKey
     * @param  array  $data
     *
     * @return array
     */
    public function item($resourceKey, array $data)
    {
        return $data;
    }

    /**
     * Serialize null resource.
     *
     * @return array
     */
    public function null()
    {
        return ['data' => []];
    }

}
