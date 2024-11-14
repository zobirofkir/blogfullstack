<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        "user_id",
        "name",
        "semi_description",
        "description",
        "image",
        "social_media_one",
        "social_media_two",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
