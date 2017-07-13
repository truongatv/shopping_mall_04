<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [ 
    'link'
    ]  
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
