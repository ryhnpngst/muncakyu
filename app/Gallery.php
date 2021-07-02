<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'destinations_id', 'image'
    ];

    protected $hidden = [

    ];

    public function destination(){
        return $this->belongsTo(Destination::class, 'destinations_id', 'id');
    }
}
