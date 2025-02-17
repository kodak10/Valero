<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    
    protected $table = 'sub_categories'; 

    protected $fillable = ['name', 'image_path'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_sub_category', 'sub_category_id', 'article_id');
    }

    

}
