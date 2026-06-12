<?php

namespace App\Services;

use App\Repositories\StudentRepositoryInterface;

class StudentService
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getStudents()
    {
        return $this->studentRepository->getAll();
    }

    public function store(array $data)
    {
        return $this->studentRepository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->studentRepository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->studentRepository->delete($id);
    }

    public function find($id)
    {
        return $this->studentRepository->findById($id);
    }
}
