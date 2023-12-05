<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Support\Facades\DB;
use App\Services\CpiService;

class CpiController extends Controller
{
    //
    protected CpiService $service;

    public function __construct(CpiService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $matriks = DB::table('cpi_evaluations')
            ->select('*')
            ->orderBy('alternatif_id')
            ->orderBy('criteria_id')
            ->get();

        $criterias = Criteria::all();
        $alternatifs = Alternatif::all();

        // get matrix
        $array = $this->service->toArray($matriks);

        $type = DB::table('criterias')
            ->select('id', 'type')
            ->get()
            ->toArray();

        // normalize matrix
        $normalize = $this->service->normalize($array, $type);
        return view('calculate', [
            'criterias' => $criterias,
            'alternatifs' => $alternatifs,
            'array' => $array,
            'normalisasi' => $normalize,
        ]);
    }
}
