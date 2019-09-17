<?php

namespace exemplo;

use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{

	protected $fillable = array('texto', 'status');
}
