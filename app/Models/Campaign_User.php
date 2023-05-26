<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Campaign_User extends Model
{
    use HasFactory, SoftDeletes;

        // define campos editáveis pelo usuário
        protected $fillable = [
            'uuid',
            'campaign_id',
            'user_id'
        ];

        public function user():BelongsTo
        {
            return $this->belongsTo(User::class);
        }
        public function campaign_user():BelongsTo
        {
            return $this->belongsTo(Campaign_User::class);
        }

}