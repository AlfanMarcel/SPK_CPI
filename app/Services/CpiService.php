<?php

namespace App\Services;

use function PHPSTORM_META\type;

class CpiService
{
    public function toArray($matrix)
    {
        foreach ($matrix as $m) {
            $result[$m->alternatif_id][$m->criteria_id] = $m->value;
        }

        return $result;
    }

    public function normalize(array $matrix, array $types)
    {
        $type = [];

        foreach ($types as $t) {
            $type[$t->id] = $t->type;
        }
        $min = [];

        for ($i = 1; $i <= count($matrix[1]); $i++) {
            $min[$i] = 100;
            for ($j = 1; $j <= count($matrix); $j++) {
                if ($min[$i] <= $matrix[$j][$i]) {
                    $min[$i] = $min[$i];
                } else {
                    $min[$i] = $matrix[$j][$i];
                }
            }
        }

        for ($i = 1; $i <= count($matrix[1]); $i++) {
            for ($j = 1; $j <= count($matrix); $j++) {
                if ($type[$i] == 'Benefit') {
                    $matrix[$j][$i] = round($matrix[$j][$i] / $min[$i] * 100, 3);
                } else {
                    $matrix[$j][$i] = round($min[$i] / $matrix[$j][$i] * 100, 3);
                }
            }
        }

        return $matrix;
    }
}
