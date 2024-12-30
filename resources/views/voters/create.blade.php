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
        <div class="form-group">
            <label>Date of Birth:</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <select name="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Contact:</label>
            <input type="text" name="contact_information" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
