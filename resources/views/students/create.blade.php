@extends('layouts.app')

@section('content')
    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>
                Department
            </label>

            <select name="department_id" class="form-control">

                <option value="">
                    Select Department
                </option>

                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">

                        {{ $department->name }}

                    </option>
                @endforeach

            </select>

            @error('department_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="mb-3">

            <label>Name</label>

            <input type="text" name="name" class="form-control" value="{{ old('name') }}">

            @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input type="email" name="email" class="form-control" value="{{ old('email') }}">

            @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="mb-3">

            <label>Phone</label>

            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">

            @error('phone')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <button type="submit" class="btn btn-success">

            Save

        </button>

    </form>
@endsection
