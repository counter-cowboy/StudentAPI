<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StudentRequest;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Http\Resources\Student\StudentAllResource;
use App\Http\Resources\Student\StudentResource;
use App\Http\Resources\Student\StudentStoreResource;
use App\Models\Student;

class StudentController extends StudentBaseController
{
    public function Index()
    {
        return StudentAllResource::collection(Student::all());
    }

    public function Store(StudentRequest $request)
    {
        $student=$this->service->Store($request->validated());
        return new StudentStoreResource($student);
    }

    public function Show(Student $student)
    {
        return new StudentResource($student);
    }

    public function Update(StudentUpdateRequest $request, Student $student)
    {
        $result = $this->service->Update($request->validated(), $student);

        return new StudentStoreResource($student);
    }

    public function Destroy(Student $student)
    {
        $student->delete();

        return response()->json();
    }
}
