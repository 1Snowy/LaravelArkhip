<?php

namespace App\Http\Controllers;

use App\Models\PollingStation;

class PollingStationController extends Controller
{
    // Один участок + связанные кандидаты 
    public function show($id)
    {
        $station = PollingStation::findOrFail($id);
        return view('polling_station', ['station' => $station]);
    }
}