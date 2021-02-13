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
        factory(\App\Cicle::class, 5)->create();
        factory(\App\User::class)->create(['email' => 'admin@admin.com', 'password'=>bcrypt('123456'), 'type'=>'ad']);
        factory(\App\User::class, 5)->create();
        factory(\App\Offer::class, 10)->create();
        factory(\App\Requirement::class, 10)->create();
        factory(\App\Applied::class, 4)->create();
        factory(\App\Article::class, 5)->create();
        

    }
}
