<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    use HasFactory;
    public $table = 'products';

    protected $primaryKey = 'id_product';

    public $fillable = [
        'product_name',
        'price',
        'stock',
    ];
}
