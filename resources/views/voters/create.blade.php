@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Voter</h1>
    <form action="{{ route('voters.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="voter_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
