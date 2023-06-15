<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumRecipe extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function image(): Attribute
    {
        return Attribute::get(
            fn (string $value) => asset('storage/' . $value)
        );
    }
}
