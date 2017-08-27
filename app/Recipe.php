<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category', 'totalprice'];
}
