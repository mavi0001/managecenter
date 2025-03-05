@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Minor Participants</h1>
    <a href="{{ route('minor_participants.create') }}" class="btn btn-primary mb-3">Add New Participant</a>
    <table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>City</th>
                <th>Father/Guardian Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
                <tr>
                    <td>{{ $participant->full_name }}</td>
                    <td>{{ $participant->age }}</td>
                    <td>{{ $participant->city }}</td>
                    <td>{{ $participant->father_or_guardian_name }}</td>
                    <td>
                        <a href="{{ route('minor_participants.show', $participant->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('minor_participants.edit', $participant->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('minor_participants.destroy', $participant->id) }}" method="POST" style="display:inline;">
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
