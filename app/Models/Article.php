<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug', 
        'description', 
        'price', 
        'quantite', 
        'status', 
        'discount_type', 
        'discount_value', 
        'couverture', 
        'is_promotion',
        'promotion_type',
        'promotion_value',
        'promotion_start',
        'promotion_end',
        'second_mains'

    ];

    protected $casts = [
        'images' => 'array',
        // 'couleurs' => 'array',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id');
    }

    public function sousCategories()
    {
        return $this->belongsToMany(SousCategorie::class, 'article_sub_category', 'article_id', 'sub_category_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
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

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

}
