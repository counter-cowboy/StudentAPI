<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lection extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'lections';
    protected $guarded=false;
    protected $with = ['groups'];

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }
}
