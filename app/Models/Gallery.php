<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Říkáme, které sloupce můžeme z formuláře plnit daty
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'category',
        'is_visible',
    ];
}