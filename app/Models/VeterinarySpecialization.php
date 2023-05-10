<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeterinarySpecialization extends Model
{
    use HasFactory;

    protected $table = 'veterinary_specialization';

    protected $fillable = [
        'veterinary_id',
        'specialization_id'
    ];
}
