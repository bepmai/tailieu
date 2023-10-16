<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProClass;
use App\Models\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i<4; $i++){
            $class = ProClass::create([
                'nameClass' => $faker->jobTitle,
            ]);
            
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'numberPhone' => $faker->numerify('##########'),
                'id_Class' => $class->id,
                'password' => bcrypt('password123'),
            ]);
        }
    }
}