<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\NewLetter;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @param  Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *  Get all news and  sort it
     */
    public function latestNews(Request $request)
    {
        $news = new NewLetter();
        // sort date asc
        if ($request->input('asc')) {
            $news = $news->orderBy('created_at', 'Asc');
        }
        // sort date dse
        if ($request->input('dsc')) {
            $news = $news->orderBy('created_at', 'DESC');
        }
        // sort rate asc
        if ($request->input('rateAsc')) {
            $news = $news->orderBy('rating', 'Asc');
        }
        // sort rate desc
        if ($request->input('rateDsc')) {
            $news = $news->orderBy('rating', 'DESC');
        }

        $news = $news->get();

        return view('pages.news.index', compact('news'));
    }
}
