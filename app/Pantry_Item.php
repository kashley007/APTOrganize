<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Pantry_Item extends Model
{
    protected $table = 'pantry_items';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'expiration_date', 'location', 'category'];
 
    // public function Location()
    // {
    //     return $this->belongsTo('App\Location');
    // }
}