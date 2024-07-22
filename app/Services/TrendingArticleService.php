<?php

namespace App\Services;

use App\Models\ArticleClick;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class TrendingArticleService
{
    public function getTrendingArticles($limit = 10)
    {
        $trendingArticleIds = ArticleClick::select('article_id', DB::raw('count(*) as total_clicks'))
            ->groupBy('article_id')
            ->orderBy('total_clicks', 'desc')
            ->take($limit)
            ->pluck('article_id');

        return Article::whereIn('id', $trendingArticleIds)->get();
    }
}


