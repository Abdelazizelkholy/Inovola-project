<?php


namespace App\Models\Transformers\Api;

use App\Models\NewLetter;

use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class NewsTransformer extends TransformerAbstract
{

    public function transform(NewLetter $newLetter): array
    {
        /**
         *    title , content , rating , date  of news
         */
        $countOfRating = 10;
        $array = [
            'title' => (string) $newLetter->title,
            'content' => (string) $newLetter->content,
            'rating' => (string) $newLetter->rating.'/'.$countOfRating,
            'dateTime' => (string) Carbon::parse($newLetter->created_at)->format( 'D M Y'),
        ];

        return $array;
    }



}
