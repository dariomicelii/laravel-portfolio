<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tags = [
            'Sviluppo web',
            'Framework',
            'Backend',
            'Frontend',
            'Database',
            'Laravel',
            'PHP',
            'JavaScript',
            'HTML',
            'CSS',

        ];

        foreach($tags as $tag) {
            $newTag = new Tag();
            
            $newTag->name = $tag;
            $newTag->color = $faker->hexColor();
            $newTag->save();
        }
    }
}
