<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Donald J. Trump',
            'picture' => 'trump.jpg',
            'color' => 'red',
            'email' => 'test.quickjob@web.de',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Money Boy',
            'picture' => 'moneyboy.jpg',
            'color' => 'red',
            'email' => 'steffen.luetzner@web.de',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Crazy Basketball Kid',
            'picture' => 'basketballkid.jpg',
            'color' => 'red',
            'email' => 'steffen.luetzner@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Darth Maul',
            'picture' => 'darthmaul.jpg',
            'color' => 'red',
            'email' => 'ariionz.youtube@web.de',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Qui-Gon Jinn',
            'picture' => 'quigon.jpg',
            'color' => 'green',
            'email' => 'hansjoloyt@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Obi-Wan Kenobi',
            'picture' => 'obiwan.jpg',
            'color' => 'blue',
            'email' => 'carinabruecher@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Zumbo',
            'picture' => 'zumbo.jpg',
            'color' => 'purple',
            'email' => 'carinabruecher@web.de',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Selina Freitag',
            'picture' => 'selina.jpg',
            'color' => 'blue',
            'email' => 'dennikuul@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);
    }
}