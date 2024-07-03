<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupLection extends Model
{
    use SoftDeletes;

    protected $table = 'group_lection';
    protected $guarded = false;
}
