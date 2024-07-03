<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{

    public function Store($data)
    {
        $student=Student::firstOrCreate($data);
        return $student;
    }

    public function Update($data, Student $student)
    {
        $result=$student->update($data);
        return $result;
    }
}
