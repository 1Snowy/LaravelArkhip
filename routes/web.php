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

// --- CRUD: Candidate (таблица candidate с внешним ключом campaign_id) ---

// Важно: маршруты с фиксированными словами (create) должны быть объявлены
// РАНЬШЕ маршрута /candidate/{id}, иначе "create" будет воспринят как {id}
Route::get('/candidate', [CandidateController::class, 'index']);
Route::get('/candidate/create', [CandidateController::class, 'create']);
Route::post('/candidate', [CandidateController::class, 'store']);
Route::get('/candidate/edit/{id}', [CandidateController::class, 'edit']);
Route::post('/candidate/update/{id}', [CandidateController::class, 'update']);
Route::get('/candidate/destroy/{id}', [CandidateController::class, 'destroy']);
Route::get('/candidate/{id}', [CandidateController::class, 'show']);