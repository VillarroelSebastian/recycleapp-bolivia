<?php

namespace Database\Seeders;

use App\Models\UserLevel;
use Illuminate\Database\Seeder;

class UserLevelSeeder extends Seeder
{
    public function run(): void
    {
        UserLevel::truncate();

        $levels = [
            ['level' => 'bronze', 'min_points' => 0],
            ['level' => 'silver', 'min_points' => 4000],
            ['level' => 'gold',   'min_points' => 8000],
        ];

        foreach ($levels as $level) {
            UserLevel::create($level);
        }
    }
}
