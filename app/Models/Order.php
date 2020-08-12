<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'code', 'id_user', 'id_shipping', 'total', 'status_product', 'status_user'
    ];
}
