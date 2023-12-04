<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

    public function edit(Request $request, $id)
    {
        $count = Criteria::all()->count();

        for ($i = 1; $i <= $count; $i++) {
            DB::table('cpi_evaluations')
                ->where('alternatif_id', $id)
                ->where('criteria_id', $i)
                ->update(['value' => $request->input($i)]);
        }

        return redirect('/value/' . $id);
    }
}
