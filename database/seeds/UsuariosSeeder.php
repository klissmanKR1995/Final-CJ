<?php

use App\user;
use Illuminate\Database\Seeder;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'administrador';
        $user->email = 'AdministradorCJ@gmail.com';
        $user->password = 'AdministradorCJ2020';
        $user->role_id = 1;
        $user->juzgado_id = 1;
        $user->save();
    }
}
