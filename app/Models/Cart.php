<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'id_user', 'id_product', 'color', 'user_qty', 'total'
    ];
}
