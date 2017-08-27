<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category', 'price', 'unit', 'in_pantry'];
}
