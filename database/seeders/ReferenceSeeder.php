<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reference;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $references = [
            [
                'code' => 'overtime_method',
                'name' => 'Salary / 173',
                'expression' => '(salary / 173) * overtime_duration_total',
                'created_at' => now('Asia/Jakarta'),
                'updated_at' => now('Asia/Jakarta')
            ],
            [
                'code' => 'overtime_method',
                'name' => 'Fixed',
                'expression' => '10000 * overtime_duration_total',
                'created_at' => now('Asia/Jakarta'),
                'updated_at' => now('Asia/Jakarta')
            ]
        ];

        Reference::insert($references);
    }
}
