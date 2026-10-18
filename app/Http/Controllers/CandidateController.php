<?php

namespace App\Http\Controllers;

use App\Models\Candidate;

class CandidateController extends Controller
{
    // Один кандидат + связанные участки (многие-ко-многим)
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidate', ['candidate' => $candidate]);
    }
}