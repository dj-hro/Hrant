<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table='pictures';

    protected $fillable = ['picture', 'explains', 'user_id'];
}
