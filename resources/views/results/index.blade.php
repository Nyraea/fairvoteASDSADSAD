@extends('layouts.app')

@section('title', 'Results')

@section('content')
    <h2 class="text-center mb-4">Election Results</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Candidate</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voteCounts as $voteCount)
                <tr>
                    <td>{{ $voteCount->candidate->candidate_name }}</td>
                    <td>{{ $voteCount->vote_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
