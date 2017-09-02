<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
	use Searchable;
	
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'category_parent_id',
    ];

	public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }

}
