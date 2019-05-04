<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Pizza ',
            'description' => 'Type of Pizza'
        ]);

        DB::table('categories')->insert([
            'name' => 'Salad ',
            'description' => 'Type of Salad'
        ]);

        DB::table('categories')->insert([
            'name' => 'Meet',
            'description' => 'Type of Meet'
        ]);
    }
}
