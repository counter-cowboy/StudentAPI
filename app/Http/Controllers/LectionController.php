<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lection\LectionRequest;
use App\Http\Resources\Lection\LectionResource;
use App\Http\Resources\Lection\LectionShowResource;
use App\Models\Lection;

class LectionController extends LectionBaseController
{
    public function Index()
    {
        return LectionResource::collection(Lection::all());
    }

    public function Store(LectionRequest $request)
    {
        $lection = $this->service->Store($request->validated());

        return new LectionResource($lection);
    }

    public function Show(Lection $lection)
    {
        $this->service->Show($lection);

        return new LectionShowResource($lection);
    }

    public function Update(LectionRequest $request, Lection $lection)
    {
        $lection->update($request->validated());

        return new LectionResource($lection);
    }

    public function Destroy(Lection $lection)
    {
        $lection->delete();

        return response()->json();
    }
}
