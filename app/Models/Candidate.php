<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';

    // Кандидат принадлежит кампании
    public function campaign()
    {
        return $this->belongsTo(ElectionCampaign::class, 'campaign_id');
    }

    public function pollingStations()
    {
        return $this->belongsToMany(PollingStation::class, 'voting_result', 'candidate_id', 'station_id') ->withPivot('vote_count');
    }
}