<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Lection */
class LectionResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,

            'class_lection_id' => $this->class_lection_id,

            'classLection' => new ClassLectionResource($this->whenLoaded('classLection')),
        ];
    }
}
