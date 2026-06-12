@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3>{{ $student->name }}</h3>

            <p>Email: {{ $student->email }}</p>

            <p>Phone: {{ $student->phone }}</p>

            <p>Department: {{ $student->department->name }}</p>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>
    </div>
@endsection
