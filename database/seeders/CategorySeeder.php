<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'moshinalar'
        ]);
        Category::create([
            'name'=> [
                'uz' => 'kiyimlar',
                'ru' => 'ru_kiyimlar'
            ]
        ]);
        Category::create([
            'name'=> [
                'uz' => 'moshinalar',
                'ru' => 'ru_moshinlar'
            ]
        ]);
        Category::create([
            'name'=> [
                'uz' => 'poyabzallar',
                'ru' => 'ru_poyabzallar'
            ]
        ]);
    }
}
