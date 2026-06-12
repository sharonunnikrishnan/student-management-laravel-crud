<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Services\StudentService;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(
        StudentService $studentService
    ) {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $students = $this->studentService->getStudents();

        return view(
            'students.index',
            compact('students')
        );
    }

    public function create()
    {
        $departments = Department::all();

        return view(
            'students.create',
            compact('departments')
        );
    }

    public function store(StoreStudentRequest $request)
    {
        $this->studentService->store(
            $request->validated()
        );

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Student created successfully.'
            );
    }

    public function edit($id)
    {
        $student = $this->studentService->find($id);

        $departments = Department::all();

        return view(
            'students.edit',
            compact(
                'student',
                'departments'
            )
        );
    }

    public function update(
        UpdateStudentRequest $request,
        $id
    ) {
        $this->studentService->update(
            $id,
            $request->validated()
        );

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Student updated successfully.'
            );
    }

    public function show($id)
    {
        $student = $this->studentService->find($id);

        return view('students.show', compact('student'));
    }

    public function destroy($id)
    {
        $this->studentService->delete($id);

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Student deleted successfully.'
            );
    }
}
