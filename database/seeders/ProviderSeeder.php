<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::create([
            'user_id'=> rand(2,14),
            'name' => 'epa',
            'description' => 'zor firma'
        ]);
        Provider::create([
            'user_id'=> rand(2,14),
            'name' => 'constavar firma',
            'description' => 'zor firma'
        ]);     Provider::create([
            'user_id'=> rand(2,14),
            'name' => 'eco',
            'description' => 'zor firma'
        ]);
    }
}
