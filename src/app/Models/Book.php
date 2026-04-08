<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Book extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;
    protected $fillable = [
        'genre_id',
        'title',
        'author',
        'pages',
        'status',
        'rating'
    ];

    public function genre()
    {
        // Um livro pertence a um genêro
        return $this->belongsTo(Genre::class);
    }
}
