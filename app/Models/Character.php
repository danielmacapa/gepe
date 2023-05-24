<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory, SoftDeletes;

    // define campos editáveis pelo usuário
    protected $fillable = [
        'uuid',
        'name',
        'strenght',
        'agility',
        'wits',
        'empathy',
        'race_id',
        'profession_id',
        'player_id'
    ];

    public function race():BelongsTo
    {
        return $this->belongsTo(Race::class);
    }
    public function profession():BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }
    public function player():BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
    public function campaign():BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }


}