<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id_seller');
    }
    
}
