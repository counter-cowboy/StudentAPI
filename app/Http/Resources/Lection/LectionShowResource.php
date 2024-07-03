<?php

namespace App\Http\Resources\Lection;

use App\Models\Lection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Lection */
class LectionShowResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->description,
            'groups'=>$this->groups->pluck('name'),
            'students'=>$this->students
              ];
    }
}
