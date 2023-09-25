<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //protected $primaryKey = 'uri'
    //protected $table = 'libri-belli-da-leggere';

    protected $fillable = [
        'name', 'year', 'pages', 'uri', 'image', 'author_id'
    ];

    public function author()
    {
        //belongs to = appartiene
        return $this->belongsTo(Author::class);
    }
}
