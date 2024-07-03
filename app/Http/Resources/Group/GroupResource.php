<?php

namespace App\Http\Resources\Group;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Group */
class GroupResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'students'=>$this->students->pluck('name')
        ];
    }
}
