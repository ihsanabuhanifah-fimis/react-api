<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0;$i<50;$i++){
        User::create(
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'jenis_kelamin' => '1',
                'username' => strtolower($faker->username), 
                'api_token' => Str::random(60)

            ]
        );
    }
    }
}
