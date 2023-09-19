<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //protected $table = 'libri-belli-da-leggere';

    protected $fillable = [
        'name', 'year', 'pages', 'uri', 'image'
    ];
}
