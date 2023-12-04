<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::paginate(10);
        return view('criteria', ['criterias' => $criterias]);
    }
}
