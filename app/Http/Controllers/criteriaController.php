<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::all();
        return view('criteria', ['criterias' => $criterias]);
    }
}
