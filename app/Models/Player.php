<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, SoftDeletes;

        // define campos editáveis pelo usuário
        protected $fillable = [
            'uuid',
            'name',
            'slug',
            'email',
            'password'
        ];


    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
