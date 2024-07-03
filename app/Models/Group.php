<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = false;
//    protected $with=['lections'];

    public function Students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function Lections(): BelongsToMany
    {
        return $this->belongsToMany(Lection::class);
    }
}
