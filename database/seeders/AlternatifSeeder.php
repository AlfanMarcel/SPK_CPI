<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $alternatif = [
            [
                'name' => 'ANNAS LUMBANTOBBING',

            ],
            [
                'name' => 'DRIJEN',

            ],
            [
                'name' => 'EMI AMALIA',

            ],
            [
                'name' => 'ENDI',

            ],
            [
                'name' => 'SULTON NUDDIN FAQIH',

            ],
            [
                'name' => 'ISMAIL ALI',

            ],
            [
                'name' => 'HAMDANI H.M',

            ],
            [
                'name' => 'HARIYANTO',

            ],
            [
                'name' => 'HERLIS LIBANON',

            ],
            [
                'name' => 'IKA DEWAYANI',

            ],
            [
                'name' => 'INDAH AGOESTINA IRIANTI',

            ],
            [
                'name' => 'LASMA SITANGGANG',

            ],
            [
                'name' => 'MUHAMMAD ZAIN',

            ],
            [
                'name' => 'MANGATAS HAPOSAN',

            ],
            [
                'name' => 'MERIANA SINAGA',

            ],
            [
                'name' => 'MISYANI',

            ],
            [
                'name' => 'IBNU ATHOILLAH',

            ],
            [
                'name' => 'MUGI SANTOSO',

            ],
            [
                'name' => 'NUNUNG NURJANA',

            ],
            [
                'name' => 'NURMALA MEIRATA SITUMORANG',

            ],
            [
                'name' => 'PRAMONO',

            ],
            [
                'name' => 'REFNIATI',

            ],
            [
                'name' => 'RITA YULMIATI',

            ],
            [
                'name' => 'SETYORINI NURUL SAFITRI',

            ],
            [
                'name' => 'SIGIT WICAKSONO BUDI',

            ],
            [
                'name' => 'SUGENG RUSMANTONO',

            ],
            [
                'name' => 'TITIK RAHMAWATI',

            ],
            [
                'name' => 'UMI HARTI',

            ],
            [
                'name' => 'WIWIK SETYARINI',

            ],
            [
                'name' => 'WIIWT HERIYANTI',

            ],
            [
                'name' => 'YENNI ZIRTA',

            ],
        ];

        Alternatif::insert($alternatif);
    }
}
