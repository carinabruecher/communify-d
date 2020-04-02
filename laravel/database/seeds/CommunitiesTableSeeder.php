<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommunitiesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            'name' => 'Pets',
            'imgUrl' => 'katzenbaby.jpg',
            'color' => 'green',
            'tag' => 'pets',
            'created_at' => Carbon::now(),
        ]);
        DB::table('communities')->insert([
            'name' => 'Star Wars',
            'imgUrl' => 'starwars.jpg',
            'color' => 'yellow',
            'tag' => 'starWars',
            'created_at' => Carbon::now(),
        ]);
        DB::table('communities')->insert([
            'name' => 'Sports',
            'imgUrl' => 'olympicflag.jpg',
            'color' => 'red',
            'tag' => 'sports',
            'created_at' => Carbon::now(),
        ]);
        DB::table('communities')->insert([
            'name' => 'Politics',
            'imgUrl' => 'politics.jpg',
            'color' => 'blue',
            'tag' => 'politics',
            'created_at' => Carbon::now(),
        ]);
        DB::table('communities')->insert([
            'name' => 'Food',
            'imgUrl' => 'food.jpg',
            'color' => 'green',
            'tag' => 'food',
            'created_at' => Carbon::now(),
        ]);
        DB::table('communities')->insert([
            'name' => 'Music',
            'imgUrl' => 'music.jpg',
            'color' => 'purple',
            'tag' => 'music',
            'created_at' => Carbon::now(),
        ]);
    }
}