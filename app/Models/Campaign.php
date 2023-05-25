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
        'name',
        'description'
    ];
    public function character(): HasMany
    {
        return $this->hasMany(Character::class);
    }
    public function campaign_user(): HasMany
    {
        return $this->hasMany(Campaign_User::class);
    }


}