<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table='students';

    protected $fillable = [
        'name',
        'email',
        'class_id',
    ];

    public function Group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
