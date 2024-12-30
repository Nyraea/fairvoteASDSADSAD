@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Voter</h1>
    <form action="{{ route('voters.update', $voter->voter_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="voter_name" class="form-control" value="{{ $voter->voter_name }}" required>
        </div>
        <div class="form-group">
            <label>Date of Birth:</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $voter->date_of_birth }}" required>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <select name="gender" class="form-control" required>
                <option value="Male" {{ $voter->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $voter->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Contact:</label>
            <input type="text" name="contact_information" class="form-control" value="{{ $voter->contact_information }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
