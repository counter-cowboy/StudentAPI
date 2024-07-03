<?php

namespace App\Http\Resources\GropLection;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\GroupLection */
class GroupLectionResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'class_id' => $this->class_id,
            'lection_id' => $this->lection_id,
        ];
    }
}
