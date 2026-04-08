<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Genre extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function books()
    {
        // Um genero pertence a muitos livros
        return $this->hasMany(Book::class);
    }
}
