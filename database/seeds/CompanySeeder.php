<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,10) as $index){
            DB::table('companies')->insert([
                'user_id' => User::all()->random()->id,
                'cname' => $name=$faker->company,
                'slug' => Str::slug($name),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'website' => $faker->domainName,
                'logo' => 'avatar/man.jpg',
                'cover_photo' => 'cover/cov-photo.jpg',
                'slogan' => 'Learn and Grow',
                'description' => $faker->paragraph(rand(2,10)),
            ]);
        }
    }
}
