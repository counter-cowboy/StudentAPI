<?php

namespace App\Services;

use App\Models\Lection;

class LectionService{

    public function Show(Lection $lection): void
    {
        foreach ($lection->groups as $group)
            $students[] = $group->students->pluck('name');

        foreach ($students as $student)
            foreach ($student as $std)
                $studentsArr[] = $std;

        $lection->students = $studentsArr;
    }

    public function Store($data): Lection
    {
        return Lection::firstOrCreate($data);
    }

    public function Update()
    {
        //TODO we decided not to use it because simple business logic lays in controller

    }
}
