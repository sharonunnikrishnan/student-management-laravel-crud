<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAll()
    {
        return Student::with('department')->latest()->get();
    }

    public function findById($id)
    {
        return Student::findOrFail($id);
    }

    public function create(array $data)
    {
        return Student::create($data);
    }

    public function update($id, array $data)
    {
        $student = $this->findById($id);

        return $student->update($data);
    }


    public function delete($id)
    {
        $student = $this->findById($id);

        return $student->delete();
    }
}
