<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class alternatifController extends Controller
{
    //
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('alternatif', compact('alternatifs'));
    }
}
