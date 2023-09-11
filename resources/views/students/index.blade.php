@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Students</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
        @if ($students->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>IC Number</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->ic_number }}</td>

                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No students found.</p>
        @endif
    </div>
@endsection
