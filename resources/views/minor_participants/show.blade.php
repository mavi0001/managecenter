@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Participant Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $minorParticipant->full_name }}</h5>
            <p class="card-text"><strong>Age:</strong> {{ $minorParticipant->age }}</p>
            <p class="card-text"><strong>Date of Birth:</strong> {{ $minorParticipant->date_of_birth }}</p>
            <p class="card-text"><strong>City:</strong> {{ $minorParticipant->city }}</p>
            <p class="card-text"><strong>Father/Guardian Name:</strong> {{ $minorParticipant->father_or_guardian_name }}</p>
            <p class="card-text"><strong>Father/Guardian Phone:</strong> {{ $minorParticipant->father_or_guardian_phone }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $minorParticipant->address }}</p>
            <p class="card-text"><strong>Observation:</strong> {{ $minorParticipant->observation }}</p>
        </div>
    </div>
    <a href="{{ route('minor_participants.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
