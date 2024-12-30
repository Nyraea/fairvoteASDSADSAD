@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Admin Panel')</title>
    </head>
    <body>
        <section>
            <h1 class="text-center mb-4">Admin Panel</h1>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <a href="{{ route('home') }}" class="btn btn-primary m-2">Home</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('vote.create') }}" class="btn btn-primary m-2">Vote Now</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('results') }}" class="btn btn-info m-2">View Results</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('organizer.organizer') }}" class="btn btn-warning m-2">Organizer Panel</a>
                <div>   
            </div>
        </section>

        <section>
            <h2 class="text-center mb-4">Manage Voting System</h2>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <a href="{{ route('voters.index') }}" class="btn btn-primary w-100 mb-2">Manage Voters</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('candidates.index') }}" class="btn btn-primary w-100 mb-2">Manage Candidates</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('positions.index') }}" class="btn btn-primary w-100 mb-2">Manage Positions</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('vote-counts.index') }}" class="btn btn-primary w-100 mb-2">View Vote Counts</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('users.index') }}" class="btn btn-primary w-100 mb-2">Manage Users</a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </section>
    </body>
    </html>
@endsection
