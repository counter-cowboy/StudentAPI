<?php

namespace App\Services;

use App\Models\Lection;

class LectionService
{

    public function Show(Lection $lection): void
    {
        foreach ($lection->groups as $group)
            $students[] = $group->students->pluck('name');

        $lection->students = $students;
    }

    public function Store($data): Lection
    {
        return Lection::firstOrCreate($data);
    }

    public  function  Update()
    {


    }
}
