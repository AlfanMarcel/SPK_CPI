<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class alternatifController extends Controller
{
    //
    public function index()
    {
        $alternatifs = Alternatif::paginate(10);
        return view('alternatif', compact('alternatifs'));
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
