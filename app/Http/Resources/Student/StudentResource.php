<?php

namespace App\Http\Resources\Student;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Student */
class StudentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'group' => $this->group->name ?? 'no_group',
            'lections' => $this->group->name ? $this->group->lections->pluck('title') : 'no_lections'
        ];
    }
}
