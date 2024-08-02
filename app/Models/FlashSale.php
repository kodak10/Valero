<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'discount_price',
        'start_time',
        'end_time',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
