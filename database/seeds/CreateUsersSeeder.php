<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            [
               'name'=>'superadmin',
               'email'=>'admin@admin.com',
                'hak_akses'=>'superadmin',
               'password'=> \Hash::make('superadmin'),
            ],
            [
               'name'=>'guru',
               'email'=>'guru@guru.com',
                'hak_akses'=>'guru',
               'password'=> \Hash::make('guru'),
            ],
            [
               'name'=>'siswa',
               'email'=>'siswa@siswa.com',
                'hak_akses'=>'siswa',
               'password'=> \Hash::make('siswa'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
