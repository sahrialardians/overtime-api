<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'overtime_method',
                'value' => 1,
                'expression' => '(salary / 173) * overtime_duration_total',
                'created_at' => now('Asia/Jakarta'),
                'updated_at' => now('Asia/Jakarta')
            ]
        ];

        Setting::insert($settings);
    }
}
