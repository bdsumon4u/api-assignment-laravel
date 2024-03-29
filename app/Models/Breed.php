<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Breed extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dogs(): HasMany
    {
        return $this->hasMany(Dog::class);
    }
}
