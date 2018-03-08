<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['name','national_id','address','birth_date','mobile_no','dr_in','diagnose','report','image'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
