<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lection\LectionRequest;
use App\Http\Resources\LectionResource;
use App\Models\Lection;

class LectionController extends Controller
{
    public function index()
    {
        return LectionResource::collection(Lection::all());
    }

    public function store(LectionRequest $request)
    {
        return new LectionResource(Lection::create($request->validated()));
    }

    public function show(Lection $lection)
    {
        return new LectionResource($lection);
    }

    public function update(LectionRequest $request, Lection $lection)
    {
        $lection->update($request->validated());

        return new LectionResource($lection);
    }

    public function destroy(Lection $lection)
    {
        $lection->delete();

        return response()->json();
    }
}
