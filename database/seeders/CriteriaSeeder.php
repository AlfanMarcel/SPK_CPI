<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $criteria = [
            [
                'name' => 'C1',
                'type' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'name' => 'C2',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'C3',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'C4',
                'type' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'name' => 'C5',
                'type' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'name' => 'C6',
                'type' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'name' => 'C7',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'C8',
                'type' => 'Cost',
                'weight' => 0.05,
            ],
            [
                'name' => 'C9',
                'type' => 'Cost',
                'weight' => 0.05,
            ],
            [
                'name' => 'C10',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'C11',
                'type' => 'Cost',
                'weight' => 0.1,
            ],
            [
                'name' => 'C12',
                'type' => 'Cost',
                'weight' => 0.05,
            ],
            [
                'name' => 'C13',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'C14',
                'type' => 'Cost',
                'weight' => 0.5,
            ],
        ];

        Criteria::insert($criteria);
    }
}
