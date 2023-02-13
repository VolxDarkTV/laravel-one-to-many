<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model
use App\Models\Person;
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
        Post::factory()->count(100)->make()->each(function($p){
            
            $person = Person::inRandomOrder() -> forst();

            $p -> person() -> associate($person);
            $p -> save();
        });
    }
}
