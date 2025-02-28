<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\QuestionsSeeder;
use Database\Seeders\OptionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(QuestionsSeeder::class); // Сначала создаем вопросы
        $this->call(OptionsSeeder::class);  // Затем создаем варианты ответов
    }
}
