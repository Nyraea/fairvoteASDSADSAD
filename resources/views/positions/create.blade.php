@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Position</h1>
    <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Position Name:</label>
            <input type="text" name="position_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
