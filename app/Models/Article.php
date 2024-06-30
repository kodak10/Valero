<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie_id', 'nom', 'surnoms', 'prix', 'taille_format', 'description', 'images','second_mains'
    ];

    protected $casts = [
        'images' => 'array',
        // 'couleurs' => 'array',
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // Relation avec la catégorie
    public function categorie()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }
}
