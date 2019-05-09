<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        factory(App\User::create([
        	'name' => 'Joaquin Monzon',
        	'email' => 'joamonz@hotmail.com',
        	'email_verified_at' => now(),
        	'dni' => 40990125,
        	'password' => bcrypt('123'),
        	'remember_token' => Str::random(10),
        	'rol' => 'admin',	
        	]));
        factory(App\User::class, 5)->create([
        	'rol' => 'admin']);
         factory(App\User::class, 5)->create([
        	'rol' => 'usuario']);
    }
}
