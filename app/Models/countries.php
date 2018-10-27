<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    protected $table='countries';
    protected $fillable = [
        'country_name', 'country_code','currency_code','currency_symbol'
    ];
}
