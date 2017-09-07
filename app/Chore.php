<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chore extends Model
{
    protected $table = 'chores';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'location'];
}
