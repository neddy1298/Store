<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = [
        'id_user', 'id_order', 'id_product', 'color', 'qty', 'total'
    ];
}
