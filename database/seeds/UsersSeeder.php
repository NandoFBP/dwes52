<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        for($i = 1; $i<101; $i++){

            User::create([
                'firstName' => 'Usuario' . $i,
                'lastName'  => 'Apellido' . $i,
                'password'  => md5(1234),
                'email'     => "usuario$i@gmail.com",
                'rol'       => 'AlumnoFP',
                'token'     => md5(date('YmdHms'))
            ]);

        }
        */

        $faker = Faker::create('es_ES');

        for($i = 1; $i<101; $i++){

            $id = \DB::table('users')->insertGetId([
                'firstName' => $faker->firstName,
                'lastName'  => $faker->lastName,
                'password'  => md5(1234),
                'email'     => $faker->unique()->email,
                'rol'       => $faker->randomElement(['Administrador', 'Profesor', 'AlumnoESO', 'AlumnoFP', 'AlumnoBach']),
                'token'     => md5(date('YmdHms'))
            ]);

            \DB::table('user_profiles')->insert([
                'user_id'   =>  $id,
                'biograph'  =>  $faker->paragraph(rand(2,5)),
                'website'   =>  'http://www.' . $faker->domainName,
                'twitter'   =>  'http://www.twitter.com/' . $faker->userName,
                'birthdate' =>  $faker->dateTimeBetween('-45 years', '-15 years')->format('Y-m-d')

            ]);

        }
    }
}
