<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'time_id' => 1,
            'category' => 'lunch',
        ]);

        DB::table('categories')->insert([
            'time_id' => 2,
            'category' => 'dinner',
        ]);
    }
}
