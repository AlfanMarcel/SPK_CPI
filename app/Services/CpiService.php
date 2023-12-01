<?php

namespace App\Services;

class CpiService
{
    public function toArray($matrix)
    {
        foreach ($matrix as $m) {
            $result[$m->alternatif_id][$m->criteria_id] = $m->value;
        }

        return $result;
    }
}
