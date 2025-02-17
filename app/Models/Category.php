<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'couverture',
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_category');
    }

    public function sousCategories()
    {
        return $this->belongsToMany(SousCategorie::class, 'article_sub_category', 'article_id', 'sub_category_id');
    }


    
}
