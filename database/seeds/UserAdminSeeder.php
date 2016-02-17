<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Primera forma de crear un usuario

        $user = new User;

        $user->firstName = 'Carlos';
        $user->lastName = 'Abrisqueta';
        $user->password = md5(1234);
        $user->email = 'iescierva.carlos@gmail.com';
        $user->rol = "Administrador";
        $user->token = md5(date('YmdHms'));

        $user->save();

        //Segunda...

        User::create([
            'firstName' => 'Pepe',
            'lastName'  => 'Sánchez',
            'password'  => md5(1234),
            'email'     => 'pepe@pepe.es',
            'rol'       => 'AlumnoFP',
            'token'     => md5(date('YmdHms'))
        ]);

        //Tercera...
        \DB::table('users')->insert([
            'firstName' => 'Juan',
            'lastName'  => 'Martínez',
            'password'  => md5(1234),
            'email'     => 'juan@juan.es',
            'rol'       => 'AlumnoESO',
            'token'     => md5(date('YmdHms'))
        ]);
    }
}
