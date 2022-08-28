<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Factory as faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Create>
 */
class CreateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name'=> $faker->name(),
            'description' => $faker->sentence(4),
            //'nis'=> mt_rand(001, 999)
            'author_id'=>mt_rand(1,20),
            'book_id'=>mt_rand(1,30),
            'image'=>$faker->imageUrl(width: 50, height:50, category:null)
        ];
    }
    
}

