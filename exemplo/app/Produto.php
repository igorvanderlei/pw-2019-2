<?php

namespace exemplo;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["nome", "preco", "categoria_id"];

	
}
