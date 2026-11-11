<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ElectionCampaign;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // Список всех кандидатов
    public function index()
    {
        return view('candidates', [
            'candidates' => Candidate::all()
        ]);
    }

    // Один кандидат + связанные участки (многие-ко-многим)
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidate', ['candidate' => $candidate]);
    }

    // Форма создания кандидата.
    // В представление передаётся список всех кампаний
    public function create()
    {
        return view('candidate_create', [
            'campaigns' => ElectionCampaign::all()
        ]);
    }

    // Сохранение нового кандидата. Валидация полей формы
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|max:150',
            'campaign_id' => 'integer',
        ]);

        $candidate = new Candidate($validated);
        $candidate->save();

        return redirect(to: '/candidate');
    }

    // Форма редактирования кандидата.
    // Передаётся сам кандидат и список всех кампаний
    public function edit(string $id)
    {
        return view('candidate_edit', [
            'candidate' => Candidate::find($id),
            'campaigns' => ElectionCampaign::all()
        ]);
    }

    // Обновление кандидата. Валидация полей формы
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'full_name' => 'required|max:150',
            'campaign_id' => 'integer',
        ]);

        $candidate = Candidate::find($id);
        $candidate->full_name = $validated['full_name'];
        $candidate->campaign_id = $validated['campaign_id'];
        $candidate->save();

        return redirect(to: '/candidate');
    }

    // Удаление кандидата
    public function destroy(string $id)
    {
        Candidate::destroy($id);
        return redirect(to: '/candidate');
    }
}