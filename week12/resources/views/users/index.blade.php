@extends('layouts.app')

@section('content')
<div class="table-wrapper">
    <h2>Student List</h2>

    @if (session('success'))
        <div class="success-box">{{ session('success') }}</div>
    @endif

    <a href="{{ route('students.create') }}" class="add-button">+ Add Student</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Program</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->program }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Remove this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No students added yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
