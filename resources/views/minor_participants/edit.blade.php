@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Participant</h1>
    <form action="{{ route('minor_participants.update', $minorParticipant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ $minorParticipant->full_name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{ $minorParticipant->age }}" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $minorParticipant->date_of_birth }}" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" class="form-control" value="{{ $minorParticipant->city }}" required>
        </div>
        <div class="form-group">
            <label for="father_or_guardian_name">Father/Guardian Name</label>
            <input type="text" name="father_or_guardian_name" class="form-control" value="{{ $minorParticipant->father_or_guardian_name }}" required>
        </div>
        <div class="form-group">
            <label for="father_or_guardian_phone">Father/Guardian Phone</label>
            <input type="text" name="father_or_guardian_phone" class="form-control" value="{{ $minorParticipant->father_or_guardian_phone }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $minorParticipant->address }}" required>
        </div>
        <div class="form-group">
            <label for="observation">Observation</label>
            <textarea name="observation" class="form-control">{{ $minorParticipant->observation }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
