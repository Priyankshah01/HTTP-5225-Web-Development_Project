@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Student Details</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
    </ul>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
