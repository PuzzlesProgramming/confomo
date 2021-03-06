<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Confomo\Entities\Friend;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Friend::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'twitter' => $faker->userName
            ]);
        }
    }

}
