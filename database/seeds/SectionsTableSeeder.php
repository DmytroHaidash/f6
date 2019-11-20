<?php

use App\Models\Section;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\Exceptions\FileCannotBeAdded;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws FileCannotBeAdded
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_En');
        $sections = require_once __DIR__.'/../datasets/sections.php';

        foreach ($sections as $section) {
            $created = Section::create([
                'type' => 'exhibit',
                'title' => $section['title'],
                'color' => $section['color'],
                'description' => $section['description'],
                'body' => $section['body'] ?? ['en' => null],
                'slug' => SlugService::createSlug(Section::class, 'slug', $section['title']['en'])
            ]);

            $created->addMediaFromUrl(asset('images/sections/'.$section['image']))->toMediaCollection('cover');

            if (isset($section['sub'])) {
                foreach ($section['sub'] as $sub) {
                    /** @var Section $newSub */
                    $newSub = $created->children()->create([
                        'type' => 'exhibit',
                        'title' => $sub['title'],
                        'description' => $sub['description'],
                        'body' => $sub['body'] ?? null,
                        'slug' => SlugService::createSlug(Section::class, 'slug', $sub['title']['en'])
                    ]);

                    $newSub->addMediaFromUrl(asset('images/sections/'.$sub['image']))->toMediaCollection('cover');
                }
            }
        }
    }
}
