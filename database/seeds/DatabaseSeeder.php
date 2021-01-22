<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        factory(\App\User::class)->create(['email' => 'ignacastri@gmail.com']);
        factory(\App\User::class)->create(['email' => 'yerayd99@gmail.com']);
        factory(\App\User::class, 5)->create();
        factory(\App\Applied::class, 4)->create();
        factory(\App\Article::class, 5)->create();
        factory(\App\Cicle::class, 5)->create();
        factory(\App\Offer::class, 10)->create();
        factory(\App\Requirement::class, 10)->create();

      
    }
}
