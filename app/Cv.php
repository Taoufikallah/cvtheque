<?php

namespace App;

Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
