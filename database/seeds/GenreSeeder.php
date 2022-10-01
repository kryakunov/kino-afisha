<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['title' => 'Ужасы'],
            ['title' => 'Комедия'],
            ['title' => 'Драма'],
            ['title' => 'Триллер'],
            ['title' => 'Драма'],
        ]);
    }
}
