<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Plástico', 'color' => '#1E90FF'],
            ['name' => 'Papel', 'color' => '#FFD700'],
            ['name' => 'Vidrio', 'color' => '#32CD32'],
            ['name' => 'Metal', 'color' => '#A9A9A9'],
            ['name' => 'Orgánico', 'color' => '#8B4513'],
            ['name' => 'Cartón', 'color' => '#CD853F'],
            ['name' => 'Baterías', 'color' => '#FF4500'],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->insert([
                'id' => Str::uuid(),
                'name' => $cat['name'],
                'color' => $cat['color'],
                'points_per_kilo' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
