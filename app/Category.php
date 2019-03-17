<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [

        'category_name',
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo','photo_id');
    }
}
