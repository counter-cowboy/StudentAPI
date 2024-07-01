<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    public function Index()
    {
        return StudentResource::collection(Student::all());
    }

    public function Store(StudentRequest $request)
    {
        return new StudentResource(Student::create($request->validated()));
    }

    public function Show(Student $student)
    {
        return new StudentResource($student);
    }

    public function Update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return new StudentResource($student);
    }

    public function Destroy(Student $student)
    {
        $student->delete();

        return response()->json();
    }
}
