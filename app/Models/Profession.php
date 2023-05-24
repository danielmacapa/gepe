<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profession extends Model
{
    use HasFactory, SoftDeletes;

        // define campos editáveis pelo usuário
        protected $fillable = [
            'uuid',
            'name',
            'description',
            'talent_name',
            'talent_description',
            'equipment'
        ];

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

}
