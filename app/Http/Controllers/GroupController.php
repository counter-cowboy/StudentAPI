<?php

namespace App\Http\Controllers;

use App\Http\Requests\Group\GroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;

class GroupController extends Controller
{
    public function Index()
    {
        return GroupResource::collection(Group::all());
    }

    public function Store(GroupRequest $request)
    {
        return new GroupResource(Group::create($request->validated()));
    }

    public function ShowLections(Group $group)
    {
        return new GroupRequest((array)$group);
    }

    public function ShowStudents(Group $group)
    {
        return new GroupRequest((array)$group);
    }

    public function UpdateLections(GroupRequest $request, Group $group)
    {
        $group->update($request->validated());

        return new GroupResource($group);
    }

    public function Update(GroupRequest $request, Group $group) //update name
    {

    }

    public function Destroy(Group $group)
    {
        $group->delete();

        return response()->json();
    }
}
