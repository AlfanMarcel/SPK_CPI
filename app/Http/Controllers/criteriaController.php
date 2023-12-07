<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::paginate(10);
        return view('criteria', ['criterias' => $criterias]);
    }

    public function edit($id)
    {
        $criteria = Criteria::find($id);

        return view('editCriteria', compact('criteria'));
        // dd($criteria);
    }

    public function update(Request $request, $id)
    {

        Criteria::find($id)->update($request);

        return redirect('/criterias');
    }
}
