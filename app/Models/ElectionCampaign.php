<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElectionCampaign extends Model
{
    protected $table = 'election_campaign';

    //у кампании много кандидатов
    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'campaign_id');
    }
}