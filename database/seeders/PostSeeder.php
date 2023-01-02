<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Post::create([
            'slug' => 'Lorem-ipsun-dolore',
            'name' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd',
            'extract' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd',
            'content' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd.',
            'image' => 'https://unavatar.io/kikobeats',
            'category' => 'Top',
            'author' => 1
        ]);

        Post::create([
            'slug' => 'Lorem-ipsun-dolore-sit-amet',
            'name' => 'Lorem ipsun dolore sit a met dor me practice',
            'extract' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd',
            'content' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd.',
            'image' => 'https://unavatar.io/kikobeats',
            'category' => 'Top',
            'author' => 1
        ]);

        Post::create([
            'slug' => 'Lorem-ipsun-dolore-sit-amet-dolor',
            'name' => 'Lorem ipsun dolore sit a met dor me practice dolore sit a met dor me practice dolore sit a met dor me practice',
            'extract' => 'Lorem ipsun dolore sit a ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd',
            'content' => 'Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd, lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd.',
            'image' => 'https://unavatar.io/kikobeats',
            'category' => 'Top',
            'author' => 1
        ]);
    }
}
