<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'Leadership',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Benefits and understanding',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Fitness levels',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Confidence with skills',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Skills in situation',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Skills',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Rules and tactics',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Recognising the difference',
            'active' => 1,
        ]);
        Area::create([
            'name' => 'Explaining the difference',
            'active' => 1,
        ]);
    }
}
