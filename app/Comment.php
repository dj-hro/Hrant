<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $table='comments';

	
    protected $fillable = [
        'name', 'comment', 'user_id', 'image',
    ];
}
