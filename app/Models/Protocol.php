<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    use HasFactory;

    // Které sloupce můžeme hromadně ukládat
    protected $fillable = [
        'protocol_number',
        'customer_name',
        'customer_phone',
        'device',
        'description',
        'price',
    ];
}