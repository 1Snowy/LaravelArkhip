<?php

namespace App\Http\Controllers;

use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('regions', ['regions' => $regions]);
    }

    public function show($id)
    {
        $region = Region::findOrFail($id);
        return view('region', ['region' => $region]);
    }
}