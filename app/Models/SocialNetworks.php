<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetworks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'veterinary_id'
    ];
}
