<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'firdt title',
                'slug' => 'first-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'second title',
                'slug' => 'second-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'third title',
                'slug' => 'third-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'fourth title',
                'slug' => 'fourth-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'fifth title',
                'slug' => 'fifth-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'sixth title',
                'slug' => 'sixth-title-one',
                'description' => 'Lorem ipsum dolor sit amet.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);

        $posts->each(function($post){
            post::insert($post);
        });
    }
}
