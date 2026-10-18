<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    protected $table = 'polling_station';

    // Участок принадлежит региону
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function candidates()
    {
        return $this->belongsToMany(Candidate::class, 'voting_result', 'station_id', 'candidate_id') ->withPivot('vote_count');
    }
}