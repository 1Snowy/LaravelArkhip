<?php

namespace App\Http\Controllers;

use App\Models\ElectionCampaign;

class ElectionCampaignController extends Controller
{
    // Все записи
    public function index()
    {
        $campaigns = ElectionCampaign::all();
        return view('election_campaigns', ['campaigns' => $campaigns]);
    }

    // Одна запись + связанные кандидаты
    public function show($id)
    {
        $campaign = ElectionCampaign::findOrFail($id);
        return view('election_campaign', ['campaign' => $campaign]);
    }
}