<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Transformers\Api\AgencyTransformer;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     *  return agency with news in response json using transformer and included relation to get his news
     */
    public function latestNews(): \Illuminate\Http\JsonResponse
    {
        $fractal = fractal()
            ->collection(Agency::all())
            ->transformWith(new AgencyTransformer())
            ->includeNews()
            ->toArray();
        return response()->json([
            'data' => $fractal,
            'status' => 'true',
        ], 200);
    }

}
