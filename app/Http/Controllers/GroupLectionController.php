<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupLection\GroupLectionRequest;
use App\Http\Resources\GropLection\GroupLectionResource;
use App\Models\GroupLection;

class GroupLectionController extends Controller
{
    public function index()
    {
        return GroupLectionResource::collection(GroupLection::all());
    }

    public function store(GroupLectionRequest $request)
    {
        return new GroupLectionResource(GroupLection::create($request->validated()));
    }

    public function show(GroupLection $classLection)
    {
        return new GroupLectionResource($classLection);
    }

    public function update(GroupLectionRequest $request, GroupLection $classLection)
    {
        $classLection->update($request->validated());

        return new GroupLectionResource($classLection);
    }

    public function destroy(GroupLection $classLection)
    {
        $classLection->delete();

        return response()->json();
    }
}
