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

    public function weighting(array $matrix, array $weight)
    {
        $weights = [];

        foreach ($weight as $w) {
            $weights[$w->id] = $w->weight;
        }

        for ($i = 1; $i <= count($matrix[1]); $i++) {
            for ($j = 1; $j <= count($matrix); $j++) {
                $matrix[$j][$i] = round($matrix[$j][$i] * $weights[$i], 3);
            }
        }
        return $matrix;
    }

    public function sum(array $matrix, array $name)
    {

        $names = [];

        foreach ($name as $n) {
            $names[$n->id] = $n->name;
        }

        // sum
        $sum = [];
        for ($i = 1; $i <= count($matrix); $i++) {
            $sum[$i][1] = $names[$i];
            $sum[$i][2] = 0;
            for ($j = 1; $j <= count($matrix[1]); $j++) {
                $sum[$i][2] += round($matrix[$i][$j], 3);
            }
        }

        // sorting
        for ($i = 1; $i <= count($sum); $i++) {
            $val = $sum[$i][2];
            $a = $sum[$i][1];
            $j = $i - 1;
            while ($j >= 1 && $sum[$j][2] < $val) {
                $sum[$j + 1][2] = $sum[$j][2];
                $sum[$j + 1][1] = $sum[$j][1];
                $j--;
            }
            $sum[$j + 1][2] = $val;
            $sum[$j + 1][1] = $a;
        }

        //rank
        for ($i = 1; $i <= count($matrix); $i++) {
            $sum[$i][3] = $i;
        }

        return $sum;
    }
}
