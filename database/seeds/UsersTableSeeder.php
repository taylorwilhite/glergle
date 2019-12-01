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
        //create 10 users with 1 glerk each
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->glerks()->save(factory(App\Glerk::class)->make());
        });
    }
}
