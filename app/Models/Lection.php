<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lection extends Model
{
    use SoftDeletes;

    protected $table = 'lections';
    protected $fillable = [
        'title',
        'description',
    ];
}
