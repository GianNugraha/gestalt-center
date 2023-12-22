<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'identity_card_number', 'address'];

    // Define relationships
    public function rents()
    {
        return $this->hasMany(Rental::class);
    }
}
