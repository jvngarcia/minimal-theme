<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Phone;
use App\Models\PhotosVeterinary;
use App\Models\Services;
use App\Models\SocialNetworks;
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Veterinary;
use App\Models\VeterinaryServices;
use App\Models\VeterinarySpecialization;

class VeterinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veterinary::create([
            'name' => 'Veterinaria 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'logo' => 'https://picsum.photos/seed/picsum/200/300',
            'email' => 'example@sad.com'
        ]);

        Address::create([
            'veterinary_id' => 1,
            'country' => 'Venezuela',
            'state' => 'Distrito Capital',
            'city' => 'Caracas',
        ]);

        Phone::create([
            'veterinary_id' => 1,
            'phone' => '0412-1234567',
        ]);

        Services::create([
            'name' => 'Servicio 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
        ]);

        VeterinaryServices::create([
            'veterinary_id' => 1,
            'service_id' => 1,
            'price' => '1000',
        ]);

        PhotosVeterinary::create([
            'veterinary_id' => 1,
            'name' => 'Foto 1',
            'photo' => 'https://picsum.photos/seed/picsum/200/300',
        ]);

        Specialization::create([
            'name' => 'Especialidad 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
        ]);

        VeterinarySpecialization::create([
            'veterinary_id' => 1,
            'specialization_id' => 1,
        ]);

        SocialNetworks::create([
            'veterinary_id' => 1,
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/',
        ]);

    }
}
