<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewdbTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('newdb')->insert([
            [
                'title' => 'First Visual Record',
                'description' => 'This is the first row in newdb!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Visual Record',
                'description' => 'This is another row for visual demonstration.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
