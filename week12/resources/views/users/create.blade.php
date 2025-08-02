@extends('layouts.app')

@section('content')
<div class="form-wrapper">
    <h2>Add a New Student</h2>

    @if ($errors->any())
        <div class="error-box">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Full Name:</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Program:</label>
        <input type="text" name="program" value="{{ old('program') }}" required>

        <button type="submit">Add Student</button>
    </form>
</div>
@endsection
