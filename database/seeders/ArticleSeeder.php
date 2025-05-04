<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// يمكن تشغيل هذا المجلد من خلال التعليمة التالية 
// php artisan db:seed --class=ArticleSeeder
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {         

        ArticleFactory::new()->count(10)->create();

    }
}
