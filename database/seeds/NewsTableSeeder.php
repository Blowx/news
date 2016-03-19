<?php

use Illuminate\Database\Seeder;
use App\Note;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            'title' => 'Главная новость',
            'desc' => 'Описание',
        ]);
    }
}
