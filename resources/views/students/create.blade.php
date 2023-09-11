@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Student</h2>
    <form action="{{ route('students.store') }}" method="POST" onsubmit="return validateForm()">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="ic_number">IC Number:</label>
            <input type="text" class="form-control" id="ic_number" name="ic_number" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script>
    function validateForm() {
        var phone = document.getElementById('phone').value;
        var icNumber = document.getElementById('ic_number').value;

        if (isNaN(phone) || isNaN(icNumber)) {
            alert('Phone number and IC number must be numeric.');
            return false;
        }

        return true;
    }
</script>
@endsection
