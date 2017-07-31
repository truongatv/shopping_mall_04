<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $primaryKey = 'image_id';

    protected $fillable = [
        'link',
        // 'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function hasImage()
    {
        $filePath = config('settings.upload_path') . $this->link;

        return file_exists($filePath);
    }
}
