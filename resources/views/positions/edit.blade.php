@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Position</h1>
    <form action="{{ route('positions.update', $position->position_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Position Name:</label>
            <input type="text" name="position_name" class="form-control" value="{{ $position->position_name }}" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="form-control" value="{{ $position->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
