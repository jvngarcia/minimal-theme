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
            'slug' => 'cuidado-de-mascotas',
            'name' => 'Cuidado de mascotas',
            'description' => 'Esta categoría incluye temas como el aseo, la alimentación, el entrenamiento y la salud y el bienestar en general.',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'adopcion-de-mascotas',
            'name' => 'Adopción de mascotas',
            'description' => 'Esta categoría proporciona información sobre cómo adoptar una mascota, así como recursos para encontrar una mascota que se adapte a su estilo de vida.',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'noticias-y-eventos',
            'name' => 'Noticias y Eventos',
            'description' => 'Mantente actualizado sobre las últimas noticias y eventos en el mundo de las mascotas, como nuevos productos y servicios, próximos eventos y noticias sobre bienestar animal.',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'historias-y-consejos-sobre-mascotas',
            'name' => 'Historias y consejos sobre mascotas',
            'description' => 'Esta categoría presenta historias conmovedoras sobre mascotas, así como consejos prácticos de expertos sobre cómo cuidar mejor a su mascota.',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);

        Category::create([
            'slug' => 'humor',
            'name' => 'Humor',
            'description' => 'Esta categoría proporciona una mirada alegre al mundo de las mascotas, con historias divertidas, fotos y videos.',
            'icon' => 'https://unavatar.io/kikobeats',
            'color' => '#009ca5',
        ]);
    }
}
