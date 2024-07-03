<?php

namespace App\Http\Resources\Lection;

use App\Http\Resources\GropLection\GroupLectionResource;
use App\Models\Lection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Lection */
class LectionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
              ];
    }
}
