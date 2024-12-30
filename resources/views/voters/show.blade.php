@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Voter Details</h1>
    <p><strong>Name:</strong> {{ $voter->voter_name }}</p>
    <p><strong>Date of Birth:</strong> {{ $voter->date_of_birth }}</p>
    <p><strong>Gender:</strong> {{ $voter->gender }}</p>
    <p><strong>Contact:</strong> {{ $voter->contact_information }}</p>
    <a href="{{ route('voters.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
