<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
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
            'description'=>$faker->paragraph(7),
            'image'=>$faker->imageUrl(50, 50, 'animals' )
            //'description' => $faker->sentence(),
            //'nis'=> mt_rand(001, 999)
        ];
    }
}
