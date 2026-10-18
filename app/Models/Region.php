<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    // в регионе много участков
    public function pollingStations()
    {
        return $this->hasMany(PollingStation::class, 'region_id');
    }
}