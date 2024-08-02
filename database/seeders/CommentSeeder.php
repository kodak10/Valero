<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $articles = Article::all();
        $users = User::all();

        foreach ($articles as $article) {
            foreach ($users as $user) {
                Comment::factory()->count(5)->create([
                    'article_id' => $article->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
