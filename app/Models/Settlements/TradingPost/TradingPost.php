<?php

namespace App\Models\Settlements\TradingPost;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingPost extends TradingPostGenerator
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'origin',
        'specialty',
        'condition',
        'visitor_traffic',
    ];
}
