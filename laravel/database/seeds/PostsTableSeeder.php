<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'userId' => '3',
            'communityId' => '2',
            'imageUrl' => 'battle.jpg',
            'description' => 'Best Duel Of All Time!!!11!1 Anakin is so cool! Fuck all haters… realtalk!',
            'tag' => 'starWars',
            'likes' => '3',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '3',
            'communityId' => '3',
            'imageUrl' => 'basketball.jpg',
            'description' => 'I love Basketballs! I like the sound when they crack my head lol',
            'tag' => 'sports',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '2',
            'communityId' => '6',
            'imageUrl' => 'beezy.jpg',
            'description' => 'Das Konzert gestern war hella lit! Turrrn Up!',
            'tag' => 'music',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '4',
            'communityId' => '2',
            'imageUrl' => 'ballen.jpg',
            'description' => 'Ich balle wie die NBA! Michael Jordan kann einpacken.',
            'tag' => 'sports',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '1',
            'communityId' => '4',
            'imageUrl' => 'queen.jpg',
            'description' => 'Met this old lady yesterday. Not sure who she is but I look adorable.',
            'tag' => 'politics',
            'likes' => '1',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '7',
            'communityId' => '5',
            'imageUrl' => 'oreo.jpg',
            'description' => 'temper your chocolate',
            'tag' => 'food',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '7',
            'communityId' => '5',
            'imageUrl' => 'glaze.jpg',
            'description' => 'mirror mirror on the cake',
            'tag' => 'food',
            'likes' => '0',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '7',
            'communityId' => '5',
            'imageUrl' => 'glaze.jpg',
            'description' => 'mirror mirror on the cake',
            'tag' => 'food',
            'likes' => '0',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '6',
            'communityId' => '2',
            'imageUrl' => 'leia.jpg',
            'description' => 'miss our lovely princess',
            'tag' => 'starWars',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '4',
            'communityId' => '2',
            'imageUrl' => 'fanart.jpg',
            'description' => 'Great fanart! Thanks!',
            'tag' => 'starWars',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '2',
            'communityId' => '1',
            'imageUrl' => 'guccibaer.jpg',
            'description' => 'Mein bester Freund: Guccibär <3',
            'tag' => 'pets',
            'likes' => '1',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '1',
            'communityId' => '1',
            'imageUrl' => 'petsm.jpg',
            'description' => 'Bester Film für alle Haustierbesitzer!!!! <33333',
            'tag' => 'pets',
            'likes' => '0',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '1',
            'communityId' => '4',
            'imageUrl' => 'reingeschaut.jpg',
            'description' => 'Played the circle game with angela yesterday. She lost lol. I am so great!',
            'tag' => 'politics',
            'likes' => '1',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '1',
            'communityId' => '4',
            'imageUrl' => 'reingeschaut.jpg',
            'description' => 'Played the circle game with angela yesterday. She lost lol. I am so great!',
            'tag' => 'politics',
            'likes' => '1',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '1',
            'communityId' => '1',
            'imageUrl' => 'tdog.jpg',
            'description' => 'my one and only',
            'tag' => 'pets',
            'likes' => '0',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '5',
            'communityId' => '2',
            'imageUrl' => 'quigonmeme.jpg',
            'description' => 'Nice one lmao.',
            'tag' => 'starWars',
            'likes' => '2',
            'created_at' => Carbon::now(),
        ]);
        DB::table('posts')->insert([
            'userId' => '8',
            'communityId' => '3',
            'imageUrl' => 'sprung.jpg',
            'description' => 'ZZZIIIEEEHHH!!!!',
            'tag' => 'sports',
            'likes' => '4',
            'created_at' => Carbon::now(),
        ]);
    }
}