{{-- premier-league.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-2">{{ $premierLeague['league']['name'] }}</h1>
        <p><strong>Country:</strong> {{ $premierLeague['country']['name'] }}</p>
        <p><strong>Number of Teams:</strong> {{ count($premierLeague['league']['teams']) }}</p>
        <!-- Adaugă alte informații dorite aici -->
    </div>
</div>
@endsection
