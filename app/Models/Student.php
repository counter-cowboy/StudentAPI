<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes, HasFactory;

    protected $table='students';

    protected $with = ['group'];

    protected $guarded=false;

    public function Group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
