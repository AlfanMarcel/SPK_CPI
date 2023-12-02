<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Http\Request;

class AValueController extends Controller
{
    //
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('aValue', ['alternatifs' => $alternatifs]);
    }

    public function showValue($id)
    {
        $aValues = Alternatif::find($id);
        $count = Criteria::count();
        // dd($aValues);
        return view('value', [
            'count' => $count,
            'values' => $aValues,
        ]);
    }
}
