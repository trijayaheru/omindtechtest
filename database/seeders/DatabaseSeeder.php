<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'              => 'Heru Trijaya',
            'email'             => 'herutrijaya13+1@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt("password"),
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
        ];
        DB::table('users')->insert($user);
        $user = [
            'name'              => 'John Doe',
            'email'             => 'herutrijaya13+johndoe@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt("password"),
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
        ];
        DB::table('users')->insert($user);
        \App\Models\Author::factory(10)->create();
        \App\Models\Book::factory(10)->create();
    }
}
