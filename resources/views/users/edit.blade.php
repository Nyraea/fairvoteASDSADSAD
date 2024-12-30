@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>User Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label>Role:</label>
            <select name="role" class="form-control" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="organizer" {{ $user->role == 'organizer' ? 'selected' : '' }}>Organizer</option>
                <option value="voter" {{ $user->role == 'voter' ? 'selected' : '' }}>Voter</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
