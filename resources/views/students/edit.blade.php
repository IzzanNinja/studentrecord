@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <h2>Edit Student</h2>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ $student->dob }}" required>
            </div>
            <div class="form-group">
                <label for="ic_number">IC Number:</label>
                <input type="text" class="form-control" id="ic_number" name="ic_number" value="{{ $student->ic_number }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
