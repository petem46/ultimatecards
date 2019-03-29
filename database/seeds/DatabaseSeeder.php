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
        $this->call(UsersTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
    }
}
