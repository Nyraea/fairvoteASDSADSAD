@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Position Details</h1>
    <p><strong>Position Name:</strong> {{ $position->position_name }}</p>
    <p><strong>Description:</strong> {{ $position->description }}</p>
    <a href="{{ route('positions.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
