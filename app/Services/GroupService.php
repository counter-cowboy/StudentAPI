<?php

namespace App\Services;

use App\Models\Group;

class GroupService
{
    public function Store($data, Group $group)
    {
        $lections = $data['lections'];
        $group->lections()->attach($lections);
    }

    public function Update($data, Group $group)
    {
        $lections = $data['lections'];
        $group->lections()->sync($lections);
    }

}
