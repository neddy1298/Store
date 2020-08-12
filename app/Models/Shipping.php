<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'shippings';
    protected $fillable = [
        'id_user', 'country', 'name', 'company_name', 'address', 'province', 'zip', 'email', 'phone', 'notes'
    ];
}
