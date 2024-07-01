<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupLection\GroupLectionRequest;
use App\Http\Resources\ClassLectionResource;
use App\Models\GroupLection;

class ClassLectionController extends Controller
{
    public function index()
    {
        return ClassLectionResource::collection(GroupLection::all());
    }

    public function store(GroupLectionRequest $request)
    {
        return new ClassLectionResource(GroupLection::create($request->validated()));
    }

    public function show(GroupLection $classLection)
    {
        return new ClassLectionResource($classLection);
    }

    public function update(GroupLectionRequest $request, GroupLection $classLection)
    {
        $classLection->update($request->validated());

        return new ClassLectionResource($classLection);
    }

    public function destroy(GroupLection $classLection)
    {
        $classLection->delete();

        return response()->json();
    }
}
