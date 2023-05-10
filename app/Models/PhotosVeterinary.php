<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotosVeterinary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'veterinary_id'
    ];

    public function veterinary()
    {
        return $this->belongsTo(Veterinary::class);
    }

    public function photosVeterinary()
    {
        return $this->hasMany(PhotosVeterinary::class);
    }
}
