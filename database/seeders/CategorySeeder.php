<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'slug' => 'Top',
            'name' => 'Top',
            'description' => 'Lo mejor de lo mejor',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Tecnologia',
            'name' => 'Tecnologia',
            'description' => 'Tecnologia',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Deportes',
            'name' => 'Deportes',
            'description' => 'Deportes',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Entretenimiento',
            'name' => 'Entretenimiento',
            'description' => 'Entretenimiento',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Salud',
            'name' => 'Salud',
            'description' => 'Salud',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Ciencia',
            'name' => 'Ciencia',
            'description' => 'Ciencia',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Negocios',
            'name' => 'Negocios',
            'description' => 'Negocios',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Cultura',
            'name' => 'Cultura',
            'description' => 'Cultura',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Mundo',
            'name' => 'Mundo',
            'description' => 'Mundo',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Opinion',
            'name' => 'Opinion',
            'description' => 'Opinion',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Politica',
            'name' => 'Politica',
            'description' => 'Politica',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Economia',
            'name' => 'Economia',
            'description' => 'Economia',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Educacion',
            'name' => 'Educacion',
            'description' => 'Educacion',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Sociedad',
            'name' => 'Sociedad',
            'description' => 'Sociedad',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Ciudad',
            'name' => 'Ciudad',
            'description' => 'Ciudad',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Medio Ambiente',
            'name' => 'Medio Ambiente',
            'description' => 'Medio Ambiente',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Viajes',
            'name' => 'Viajes',
            'description' => 'Viajes',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'Estilo de vida',
            'name' => 'Estilo de vida',
            'description' => 'Estilo de vida',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);
    }
}
