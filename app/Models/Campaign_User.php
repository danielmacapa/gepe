<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Campaign_User extends Model
{
    use HasFactory, SoftDeletes;

        // define campos editáveis pelo usuário
    protected $fillable = [
        'uuid',
        'campaign_id',
        'user_id'
    ];
    public function campaign():BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}