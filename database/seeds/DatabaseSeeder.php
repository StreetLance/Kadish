<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PageContentsSeeder::class);
        $this->call(MultilanguagesSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
