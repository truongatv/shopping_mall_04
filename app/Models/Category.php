<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Category extends Model
{
    use ElasticquentTrait;
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
