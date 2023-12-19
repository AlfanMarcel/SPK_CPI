<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::paginate(10);
        return view('criteria', ['criterias' => $criterias]);
    }

    public function create()
    {
        $weightTotal = Criteria::sum('weight');

        if ($weightTotal >= 1) {
            return redirect('/criterias')->with('alert', 'Total bobot sudah 100%');
        }
        return view('addCriteria');
    }

    public function store(Request $request)
    {
        $weightTotal = Criteria::sum('weight');
        $weightNow = $weightTotal + $request->weight;
        if ($weightNow > 1) {
            return redirect('/criteria/form_add')->with('alert', 'Total bobot melebihi 100%');
        }
        $criteria = new Criteria();
        $criteria->name = $request->name;
        $criteria->type = $request->type;
        $criteria->weight = $request->weight;

        if ($criteria->save()) {
            $aCount = Alternatif::all()->count();

            for ($i = 1; $i <= $aCount; $i++) {
                DB::table('cpi_evaluations')->insert([
                    'alternatif_id' => $i,
                    'criteria_id' => $criteria->id,
                    'value' => 1
                ]);
            }
        } else {
            return redirect('/criterias')->with('false', 'gagal');
        }

        return redirect('/criterias')->with('true', 'Data berhasil ditambahkan');
        // return $weightNow;
    }

    public function edit($id)
    {
        $criteria = Criteria::find($id);

        return view('editCriteria', compact('criteria'));
        // dd($criteria);
    }

    public function update(Request $request, $id)
    {

        Criteria::find($id)->update($request->all());

        return redirect('/criterias');
    }
}
