<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function image(): Attribute
    {
        return Attribute::get(
            fn (string $value) => asset('storage/' . $value)
        );
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'recipe_tag');
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'recipe_id', 'id');
    }

    public function tools(): HasMany
    {
        return $this->hasMany(Tool::class, 'recipe_id', 'id');
    }

    public function instructions(): HasMany
    {
        return $this->hasMany(Instruction::class, 'recipe_id', 'id');
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class, 'recipe_id', 'id');
    }

    public function discovers(): HasMany
    {
        return $this->hasMany(Discover::class, 'recipe_id', 'id');
    }
}
