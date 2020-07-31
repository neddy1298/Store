<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'shippings';
    protected $fillable = [
        'country', 'name', 'company_name', 'address', 'state', 'zip', 'email', 'phone', 'notes'
    ];
}
