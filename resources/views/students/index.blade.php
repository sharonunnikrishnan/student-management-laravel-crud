@extends('layouts.app')

@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">

        Add Student

    </a>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Phone</th>

                <th>Department</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @forelse($students as $student)
                <tr>

                    <td>{{ $student->id }}</td>

                    <td>{{ $student->name }}</td>

                    <td>{{ $student->email }}</td>

                    <td>{{ $student->phone }}</td>

                    <td>
                        {{ $student->department->name }}
                    </td>

                    <td>

                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6">

                        No Students Found

                    </td>

                </tr>
            @endforelse

        </tbody>

    </table>
@endsection
