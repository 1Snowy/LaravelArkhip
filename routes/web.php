<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectionCampaignController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PollingStationController;
use App\Http\Controllers\CandidateController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloo', function () {
    return view('hello', ['name' => 'Hello surgu']);
});
Route::get('/election_campaign', [ElectionCampaignController::class, 'index']);
Route::get('/election_campaign/{id}', [ElectionCampaignController::class, 'show']);

Route::get('/region', [RegionController::class, 'index']);
Route::get('/region/{id}', [RegionController::class, 'show']);

Route::get('/polling_station/{id}', [PollingStationController::class, 'show']);
Route::get('/candidate/{id}', [CandidateController::class, 'show']);