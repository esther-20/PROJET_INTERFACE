<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();


        $admin = User::create([
            'name'=>'Meda',
            'firstname'=>'Debora',
            'adresse'=>'Faya',
            'telephone'=>'54477989',
            'email'=>'meda@gmail.com',
            'password'=>Hash::make('password'),
            'role'=>'admin',

        ]);

        $utilisateur = User::create([
            'name'=>'Fabio',
            'firstname'=>'Gbelia',
            'adresse'=>'Cocody',
            'telephone'=>'12234565',
            'email'=>'fabrice@gbelia.you',
            'password'=>Hash::make('password'),
            'role'=>'utilisateur',

        ]);

        

        $adminRole = Role::where('name','admin')->first();
        $utilisateurRole = Role::where('name','utilisateur')->first();


        $admin->roles()->attach($adminRole);
        $utilisateur->roles()->attach($utilisateurRole);
    }
}
