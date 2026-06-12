@extends('layouts.app')

@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">

            <label>
                Department
            </label>

            <select name="department_id" class="form-control">

                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" {{ $student->department_id == $department->id ? 'selected' : '' }}>

                        {{ $department->name }}

                    </option>
                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Name</label>

            <input type="text" name="name" class="form-control" value="{{ $student->name }}">

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input type="email" name="email" class="form-control" value="{{ $student->email }}">

        </div>

        <div class="mb-3">

            <label>Phone</label>

            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">

        </div>

        <button type="submit" class="btn btn-primary">

            Update

        </button>

    </form>
@endsection
