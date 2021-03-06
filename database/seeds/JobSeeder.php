<?php

use App\Company;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('jobs')->insert([
                'user_id' => User::all()->random()->id,
                'company_id' => Company::all()->random()->id,
                'title' => $title = $faker->text,
                'slug' => Str::slug($title),
                'description' => $faker->paragraph(rand(2, 10)),
                'roles' => $faker->text,
                'address' => $faker->address,
                'category_id' => rand(1, 5),
                'position' => $faker->jobTitle,
                'type' => 'fulltime',
                'status' => rand(0, 1),
                'last_date' => $faker->DateTime,
                'number_of_vacancy' => rand(1, 10),
                'experience' => rand(1, 10),
                'gender' => $faker->randomElement(['any', 'male', 'female']),
                'salary' => rand(10000, 70000),
            ]);
        }
    }
}