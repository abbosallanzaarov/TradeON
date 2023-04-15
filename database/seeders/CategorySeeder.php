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
            'user_id'=> 2,
            'name'=> [
                'uz' => 'moshinalar',
                'ru' => 'ru_moshinalar',
            ]
        ]);
        Category::create([
            'user_id'=> 2,
            'name'=> [
                'uz' => 'kiyimlar',
                'ru' => 'ru_kiyimlar'
            ]
        ]);
        Category::create([
            'user_id'=> 2,
            'name'=> [
                'uz' => 'moshinalar',
                'ru' => 'ru_moshinlar'
            ]
        ]);
        Category::create([
            'user_id'=> 2,
            'name'=> [
                'uz' => 'poyabzallar',
                'ru' => 'ru_poyabzallar'
            ]
        ]);
    }
}
