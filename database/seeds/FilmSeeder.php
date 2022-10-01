<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'title' => 'Техасская резня бензопилой',
                'status' => 0,
            ],
            [
                'title' => 'Титаник',
                'status' => 0,
            ],
            [
                'title' => 'Форрест Гамп',
                'status' => 0,
            ],
            [
                'title' => 'Тупой и ещё тупее',
                'status' => 0,
            ],
        ]);
    }
}
