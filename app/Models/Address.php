<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
        'complement',
        'veterinary_id'
    ];

    public function veterinary()
    {
        return $this->belongsTo(Veterinary::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
