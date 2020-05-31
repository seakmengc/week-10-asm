<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_id', 'name'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
