@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Voter Details</h1>
    <p><strong>Name:</strong> {{ $voter->voter_name }}</p>
    <a href="{{ route('voters.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
