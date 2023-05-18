<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function veterinaries()
    {
        return $this->belongsToMany(Veterinary::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }

}
