<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'veterinary_id'
    ];

    public function veterinary()
    {
        return $this->belongsTo(Veterinary::class);
    }
}
