<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gift;
use Faker\Generator as Faker;

class GiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $newGift = new Gift();
            $newGift->gift = $faker->word();
            $newGift->name = $faker->firstName($gender = 'male' | 'female');
            $newGift->surname = $faker->lastName();
            $newGift->age = $faker->numberBetween(1, 12);
            $newGift->country = $faker->country();
            $newGift->city = $faker->city();
            $newGift->address = $faker->address();
            $newGift->image = $faker->imageUrl(360, 360, 'abstract', true);
            $newGift->save();
        }
    }
}