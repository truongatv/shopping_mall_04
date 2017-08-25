<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'content',
        'comment_parent_id',
        'product_id',
        'user_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
   {
       return $this->hasMany('App\Models\Comment','comment_parent_id', 'comment_id')->orderBy('created_at', 'desc');
   }
}
