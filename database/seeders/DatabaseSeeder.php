<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AlternatifSeeder::class,
            CriteriaSeeder::class,
        ]);

        $Acount = Alternatif::all()->count();
        $Ccount = Criteria::all()->count();
        for ($i = 1; $i <= $Acount; $i++) {
            for ($j = 1; $j <= $Ccount; $j++) {
                DB::table('cpi_evaluations')->insert([
                    'alternatif_id' => $i,
                    'criteria_id' => $j,
                    'value' => 1
                ]);
            }
        }
    }
}
