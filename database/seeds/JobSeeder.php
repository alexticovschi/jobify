<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Company;

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
        
        foreach(range(1,100) as $index){
            DB::table('jobs')->insert([
                'user_id' => User::all()->random()->id,
                'company_id' => Company::all()->random()->id,
                'title' => $title='Avatar Ltd',
                'slug' => Str::slug($title),
                'description' => $faker->paragraph(rand(2,10)),
                'address' => $faker->address,
                'category_id' => rand(1,5),
                'position' => $faker->jobTitle,
                'type' => 'fulltime',
                'status' => rand(0, 1),
                'last_date' => $faker->DateTime,
            ]);
        }
    }
}
