<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FromDr extends Model
{
    protected $table='fromdrs';
       protected $fillable=['name','has_cache','withdrawn','net_cache','user_id'];

       public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
