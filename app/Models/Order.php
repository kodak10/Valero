<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'pays',
        'phone01',
        'phone02',
        'email',
        'order_notes',
        'total_price',
        'order_number',
        'user_id',
        'admin_id',
        'status',
        'created_at',
        'store_id'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function addressModel()
    // {
    //     return $this->belongsTo(Address::class, 'address_id');
    // }

    public function totalAmount()
    {
        return $this->details->sum('subtotal');
    }

    
}
