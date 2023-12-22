<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'price_rent', 'book_category'];

    // Define any relationships if needed
    // For example, if a book can be rented by multiple customers
    public function rents()
    {
        return $this->hasMany(Rental::class);
    }
}
