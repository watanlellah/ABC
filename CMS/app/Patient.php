<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=['name','national_id','address','birth_date','mobile_no','dr_in','diagnose','report','image','user_id','fromdr_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function fromdr()
    {
        return $this->belongsTo('App\FromDr');
    }
}
