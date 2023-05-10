<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'email',
    ];

    public function photosVeterinary()
    {
        return $this->hasMany(PhotosVeterinary::class);
    }

    public function socialNetwork()
    {
        return $this->hasMany(SocialNetworks::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }

    public function services()
    {
        return $this->hasMany(Services::class);
    }

    public function specialization()
    {
        return $this->hasMany(Specialization::class);
    }

}
