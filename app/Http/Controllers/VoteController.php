<?php


namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\VoteCount;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function create()
    {
        $candidates = Candidate::all();
        return view('vote.create', compact('candidates'));
    }

    public function store(Request $request)
    {
        $voterId = Auth::id();
        
        $request->validate([
            'candidate_id' => 'required|exists:candidates,candidate_id',
        ]);

        if (!$voterId) {
            return redirect()->back()->withErrors('You must log in to vote.');
        }

        if (Vote::where('voter_id', $voterId)->exists()) {
            return redirect()->back()->withErrors('You have already voted.');
        }

        Vote::create([
            'voter_id' => $voterId,
            'candidate_id' => $request->candidate_id,
        ]);

        // Increment the vote count for the candidate in the vote_counts table
        $voteCount = VoteCount::firstOrCreate(
            ['candidate_id' => $request->candidate_id],
            ['vote_count' => 0]
        );
        $voteCount->increment('vote_count');

        return redirect()->route('home')->with('success', 'Your vote has been submitted.');
    }
}
