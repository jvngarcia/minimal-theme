<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeterinaryServices extends Model
{
    use HasFactory;

    protected $table = 'services_veterinary';

    protected $fillable = [
        'veterinary_id',
        'service_id',
        'price'
    ];

    // public function veterinary()
    // {
    //     return $this->belongsTo(Veterinary::class);
    // }

    // public function service()
    // {
    //     return $this->belongsTo(Service::class);
    // }
}
