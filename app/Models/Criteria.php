<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Criteria extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Alternatifs(): BelongsToMany
    {
        return $this->belongsToMany(Alternatif::class, 'cpi_evaluations');
    }
}
