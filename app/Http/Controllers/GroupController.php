<?php

namespace App\Http\Controllers;

use App\Http\Requests\Group\GroupRequest;
use App\Http\Requests\Group\GroupStoreLectionsRequest;
use App\Http\Requests\Group\GroupUpdateLectionsRequest;
use App\Http\Resources\Group\GroupLectionResource;
use App\Http\Resources\Group\GroupResource;
use App\Http\Resources\Group\GroupUpdateResource;
use App\Models\Group;
use function MongoDB\BSON\fromJSON;

class GroupController extends GroupBaseController
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
        return new GroupLectionResource($group);
    }

    public function ShowStudents(Group $group)
    {
        return new GroupResource($group);
    }

    public function StoreLections(GroupStoreLectionsRequest $request, Group $group)
    {
        $this->service->store($request->validated(), $group);

        return new GroupLectionResource($group);
    }

    public function UpdateLections(Group $group, GroupUpdateLectionsRequest $request)
    {
        $this->service->update($request->validated(), $group);

        return new GroupLectionResource($group);
    }

    public function Update(GroupRequest $request, Group $group) //update name
    {
        $group->update($request->validated());

        return new GroupUpdateResource($group);
    }

    public function Destroy(Group $group)
    {
        $group->delete();

        return response()->json();
    }
}
