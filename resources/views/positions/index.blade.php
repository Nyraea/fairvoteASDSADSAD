@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Positions</h1>
    <a href="{{ route('positions.create') }}" class="btn btn-primary">Add New Position</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Position Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
            <tr>
                <td>{{ $position->position_id }}</td>
                <td>{{ $position->position_name }}</td>
                <td>{{ $position->description }}</td>
                <td>
                    <a href="{{ route('positions.show', $position->position_id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('positions.edit', $position->position_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('positions.destroy', $position->position_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
