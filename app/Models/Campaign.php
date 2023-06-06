<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    // define campos editáveis pelo usuário
    protected $fillable = [
        'uuid',
        'user_id',
        'name',
        'resume',
        'description'
    ];
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(Campaign_User::class);
    }


}
