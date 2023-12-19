<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class alternatifController extends Controller
{
    //
    public function index()
    {
        $alternatifs = Alternatif::paginate(10);
        return view('alternatif', compact('alternatifs'));
    }

    public function create()
    {
        return view('addAlternatif');
    }

    public function store(Request $request)
    {

        $alternatif = new Alternatif();

        $alternatif->name = $request->name;

        if ($alternatif->save()) {
            $Ccount = Criteria::all()->count();

            for ($i = 1; $i <= $Ccount; $i++) {
                DB::table('cpi_evaluations')->insert([
                    'alternatif_id' => $alternatif->id,
                    'criteria_id' => $i,
                    'value' => 1
                ]);
            }
        } else {
            return redirect('/alternatifs')->with('false', 'gagal');
        }

        return redirect('/alternatifs')->with('true', 'Data berhasil ditambahkan');

        // return $request->name;
    }

    public function edit($id)
    {
        $alternatif = Alternatif::find($id);

        return view('editAlternatif', compact('alternatif'));
        // dd($criteria);
    }

    public function update(Request $request, $id)
    {

        Alternatif::find($id)->update($request->all());

        return redirect('/alternatifs');
    }
}
