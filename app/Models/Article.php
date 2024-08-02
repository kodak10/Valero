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

    // Relation avec la catégorie
    public function categorie()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function wishes()
    {
        return $this->hasMany(Wish::class);
    }

    public function comments()
{
    return $this->hasMany(Comment::class);
}

// Méthode pour obtenir la note moyenne
public function averageRating()
{
    return $this->comments()->avg('rating');
}

public function reviewsCount()
{
    return $this->comments()->count();
}

public function flashSales()
    {
        return $this->hasMany(FlashSale::class);
    }

    // Relation pour les produits associés
    public function associatedProducts()
    {
        return $this->belongsToMany(Article::class, 'associated_products', 'article_id', 'associated_article_id');
    }

}
