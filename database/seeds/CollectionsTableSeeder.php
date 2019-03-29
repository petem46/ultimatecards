<?php

use App\Collection;
use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'name' => 'Y7 DC1',
        ]);
        Collection::create([
            'name' => 'Y7 DC2',
        ]);
        Collection::create([
            'name' => 'Y7 DC3',
        ]);
        Collection::create([
            'name' => 'Y7 DC4',
        ]);
    }
}
